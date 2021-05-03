<?php

namespace App\Http\Controllers;

use ICIGAILLC\LaravelModelFieldBuilder\Models\Field;
use ICIGAILLC\LaravelModelFieldBuilder\Models\FieldRule;
use Illuminate\Http\Request;
use Illuminate\Support\Collection;
use Illuminate\Support\Facades\DB;

class FieldBuilderController extends Controller
{
    //
    public function index($module){
        $module_class= config('builder.'.$module);
        return view('builder', ["fields" => ($module_class)::fields()->get()]);
    }

    public function validateFields($module_class, $fields){
        $msg= false;
        $groupedByName= $fields->groupBy('name');
        $isDup = $groupedByName->some(function (Collection $groups) {
            return $groups->count() > 1;
        });
        if($isDup)
            return "Every Field should have a unique name.";

        $hasGroup = $fields->some(function ($field) {
            return !array_key_exists("extra", $field) || ($field["extra"] && !array_key_exists("group", $field["extra"]));
        });
        if($hasGroup)
            return "Every Field should belong to a group.";


        $columns= DB::getSchemaBuilder()->getColumnListing((new $module_class)->getTable());
        foreach ($columns as $column){
            $isReserved = $fields->some(function ($field) use ($column){
                return $field["name"] === $column;
            });
            if($isReserved)
                return "(".$column.") This name is reserved and can't be used.";
        }
        return $msg;
    }
    public function insertOrUpdateField($currentField, $field, $isUpdate= false){
        $currentField->name= $field["name"];
        $currentField->position= $field["position"];
        $currentField->label= $field["label"];
        if(array_key_exists("extra", $field))
            $currentField->extra= $field["extra"];

        $currentField->save();

        if($isUpdate){
            $currentField->rules()->delete();
        }
        collect($field["rules"])->each(function ($rule, $key) use ($currentField) {
            $currentRule= new FieldRule();
            $currentRule->rule= $rule["rule"];
            if(array_key_exists("value", $rule))
                $currentRule->value= $rule["value"];

            $currentField->rules()->save($currentRule);
        });
    }
    public function insertFields($module_class, $newFields){
        if($newFields->count() <= 0){
            return;
        }
        $newFields->each(function ($field, $key) use ($module_class) {
            $currentField= ($module_class)::getFieldInstanceWithType($field["type"]);
            $this->insertOrUpdateField($currentField, $field);
        });

    }
    public function updateFields($module_class, $oldFields){
        if($oldFields->count() <= 0){
            return;
        }

        $oldFields->each(function ($field, $key) use ($module_class) {
            $currentField= Field::findOrFail($field["id"]);
            $this->insertOrUpdateField($currentField, $field, true);
        });
    }
    public function deleteFields($oldFieldsToDelete){
        $oldFieldsIdsToDelete= [];
        foreach ($oldFieldsToDelete as $field){
            array_push($oldFieldsIdsToDelete, $field->id);
        }
        Field::whereIn('id', $oldFieldsIdsToDelete)->delete();

    }
    public function save($module, Request $request){
        $module_class= config('builder.'.$module);
        $fields= collect($request->input('fields'));
        $fields= $fields->map(function ($item, $key) {
            $item["position"]= $key;
            $item["name"]= str_replace(' ', '_', strtolower($item["name"]));
            return $item;
        });

        $error= $this->validateFields($module_class, $fields);
        if($error){
            return response()->json([
                "msg"=> $error,
            ], 400);
        }

        $oldFieldsBefore= ($module_class)::fields()->get('id');

        // Old Fields
        $oldFields= $fields->filter(function ($value, $key) {
            return array_key_exists("isOld", $value) && $value["isOld"];
        });

        //Update Old Fields
        $this->updateFields($module_class, $oldFields);



        // Delete Fields
        $oldFieldsToDelete= $oldFieldsBefore->filter(function ($field, $key) use($oldFields) {
            return !$oldFields->contains(function ($oldField, $key) use ($field) {
                return $oldField["id"] === $field["id"];
            });
        });
        $this->deleteFields($oldFieldsToDelete);



        //New Fields
        $newFields= $fields->filter(function ($value, $key) {
            return !array_key_exists("isOld", $value) || !$value["isOld"];
        });

        $this->insertFields($module_class, $newFields);

        return [
            "fields" => ($module_class)::fields()->get()
        ];
    }
}
