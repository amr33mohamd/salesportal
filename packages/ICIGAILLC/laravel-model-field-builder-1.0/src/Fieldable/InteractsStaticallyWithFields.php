<?php


namespace ICIGAILLC\LaravelModelFieldBuilder\Fieldable;


use ICIGAILLC\LaravelModelFieldBuilder\Models\Field;
use ICIGAILLC\LaravelModelFieldBuilder\Models\FieldRecord;
use Illuminate\Database\Eloquent\Builder;
use function PHPUnit\Framework\isEmpty;

trait InteractsStaticallyWithFields
{
    use InteractsWithFields;

    public static function fields(){
        return Field::where(static::getTypeFromMorphName(), static::getFieldMorphClass())->orderBy('position');
    }

    public static function getFieldInstance(Field $field){
        $morphName= static::getTypeFromMorphName();
        $field->$morphName= static::getFieldMorphClass();
        return $field;
    }
    public static function getFieldInstanceWithType($type){
        $field= new Field();
        $field->type= $type;
        return static::getFieldInstance($field);
    }
    public static function getTextFieldInstance(){
        return static::getFieldInstanceWithType("text");
    }
    public static function getEmailFieldInstance(){
        return static::getFieldInstanceWithType("email");
    }
    public static function getPasswordFieldInstance(){
        return static::getFieldInstanceWithType("password");
    }
    public static function getNumberFieldInstance(){
        return static::getFieldInstanceWithType("number");
    }
    public static function getSelectFieldInstance(){
        return static::getFieldInstanceWithType("select");
    }
    public static function getCheckFieldInstance(){
        return static::getFieldInstanceWithType("check");
    }
    public static function getRadioFieldInstance(){
        return static::getFieldInstanceWithType("radio");
    }

    public function fieldsData()
    {
        return $this->morphMany(FieldRecord::class, static::$fieldMorphName);
    }

    public function syncFields($fields){
        $this->fieldsData()->delete();
        $this->setFieldsAttribute($fields);
    }

    public function setFieldsAttribute($fields)
    {
        if(!$fields || !is_array($fields))
            return;

        $nameArr= array_keys($fields);
        $modelFields= Field::findAllByName($nameArr);
        $currentData= $this->fieldsData;

        $newRecordsArr= [];
        foreach ($modelFields as $field){
            $record= $currentData->where("field_id", $field->id)->first();
            if($record){
                $record->value= $fields[$field->name];
                $record->save();
            }else{
                $newRecordsArr[]= new FieldRecord([
                    "field_id"=> $field->id,
                    "value"=> $fields[$field->name],
                ]);
            }
        }

        //Create Only no update
        if(!empty($newRecordsArr)){
            $this->fieldsData()->saveMany($newRecordsArr);
        }
    }


    public function whereFieldCommon($query, $name, $operator, $value){
        return $query->whereHas('fieldsData', function (Builder $query) use ($name, $operator, $value) {
            return $query->whereHas('field', function (Builder $query) use ($name) {
                $query->where('name', $name);
            })->where('value', $operator, $value);
        });
    }
    public function scopeWhereField($query, $name, $operator= "=", $value= null)
    {
        return $query->where(function ($query) use ($name, $operator, $value){
            return $this->whereFieldCommon($query, $name, $operator, $value);
        });
    }
    public function scopeOrWhereField($query, $name, $operator= "=", $value= null)
    {
        return $query->orWhere(function ($query) use ($name, $operator, $value){
            return $this->whereFieldCommon($query, $name, $operator, $value);
        });
    }
    public function scopeOrderByField($query, $name, $direction = 'desc')
    {
//        dd($this->fieldsData()->whereHas('field', function (Builder $query) use ($name) {
//                $query->where('name', $name);
//            })
//            ->select('value')
//            ->first());
//        return $query->orderBy(function ($query) use ($name){
//            return FieldRecord::select('value')
//                ->whereHas('field', function (Builder $query) use ($name) {
//                    $query->where('name', $name);
//                })
//                ->latest()
//                ->take(1);
//        },
//            $direction
//        );
    }
}
