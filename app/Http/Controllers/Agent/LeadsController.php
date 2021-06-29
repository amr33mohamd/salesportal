<?php

namespace App\Http\Controllers\Agent;

use Illuminate\Http\Request;
use App\Models\leads;
use App\Http\Controllers\Controller;
use Illuminate\Support\Facades\Auth;
use App\Models\accounts;

use App\Models\User;
use App\Models\lead_status;
use App\Models\hear_about_us;
use App\Models\nationality;
use App\Models\education_qualifications;
use App\Models\industry;
use App\Models\currencies;
use App\Models\traffic_source;
use App\Models\traffic_mediums;

class LeadsController extends Controller
{
    public function index(Request $request){
      $user = Auth::user();
      $leads = $user->leads;
        $fields = leads::fields()->get();

      return view('Agent.Sales.Leads.Leads',['leads'=>$leads,'fields'=>$fields]);


    }
    public function editScreen(Request $request){
      $lead = leads::query()->where('id',request('id'))->first();
      $user = Auth::user();
       $statuses = lead_status::all();
$hear_about_uses = hear_about_us::all();
$nationalities = nationality::all();
$educations = education_qualifications::all();
$industries = industry::all();
$currancies = currencies::all();
$sources = traffic_source::all();
$mediums = traffic_mediums::all();
        $fields = leads::fields()->get();

return view('Agent.Sales.Leads.NewLead',['lead'=>$lead,'sources'=>$sources,'mediums'=>$mediums,'industries'=>$industries,'fields'=>$fields,'currancies'=>$currancies,'type'=>'edit','statuses'=>$statuses,'education_qualifications'=>$educations,'hear_about_uses'=>$hear_about_uses,'nationalities'=>$nationalities]);

    }
    public function addScreen(Request $request){
      $lead = new leads;
      $user = Auth::user();
       $statuses = lead_status::all();
       $hear_about_uses = hear_about_us::all();
       $nationalities = nationality::all();
       $educations = education_qualifications::all();
       $industries = industry::all();
       $currancies = currencies::all();
       $sources = traffic_source::all();
       $mediums = traffic_mediums::all();
        $fields = leads::fields()->get();

        return view('Agent.Sales.Leads.NewLead',['lead'=>$lead,'fields'=>$fields,'sources'=>$sources,'mediums'=>$mediums,'industries'=>$industries,'currancies'=>$currancies,'type'=>'add','statuses'=>$statuses,'education_qualifications'=>$educations,'hear_about_uses'=>$hear_about_uses,'nationalities'=>$nationalities]);

    }
    public function edit(Request $request){
      $leads = leads::all();
      $data = $request->all();
      unset($data['_token']);
      unset($data['file']);

      if(isset($request->file)){
         leads::query()->where('id',request('id'))->first()->addMedia($request->file)->toMediaCollection();
         unset($data['file']);

      }
        $account= leads::findOrFail(request('id'));
        $account->fields= array_merge(array_filter($data));
        $account->save();
      return redirect('/leads');

    }
    public function add(Request $request){
      $leads = leads::all();
      $data = $request->all();
      $data['user_id'] = Auth::user()->id;
      $add = leads::query()->create(array_merge(array_filter($data)));
      unset($data['file']);
        $add->fields = array_merge(array_filter($data));
        $add->save();
      if(isset($request->file)){
         $add->addMedia($request->file)->toMediaCollection();
      }
      return redirect('/leads');
    }
    public function convert(Request $request){
        $user = Auth::user();
      $row_object = leads::where('id', $request->id)->first();
      $fields = leads::fields()->get();
        // convert to array
        $row_array = [];
        foreach ($fields as $field){
            $data = $row_object->getFieldById($field->id);
//            echo $field->name;
            if(isset($data->value))
                $row_array[$field->name] = $data->value;
        }
//        $row_array = $row_object->toArray();
//
//        // unset the row id (assuming id autoincrements)
//        unset($row_array['id']);
//        unset($row_array['created_at']);
//        unset($row_array['updated_at']);
//
//
//        // insert the row data into the new table (assuming all fields are the same)
        $account = accounts::create([
            "user_id"=>$user->id
        ]);

        $account->fields = array_merge(array_filter($row_array));
        $account->save();
//
        $leads = leads::find($request->id)->delete();

       return redirect('/accounts/edit/'.$account->id);
    }
    public function delete(Request $request){
       $auth = Auth::user();
       foreach( leads::find($request->id)->calls as $call){
         $call->delete();
       }
       foreach( leads::find($request->id)->meetings as $meetings){
         $meetings->delete();
       }
       foreach( leads::find($request->id)->tasks as $tasks){
         $tasks->delete();
       }
       leads::find($request->id)->delete();


       return redirect('/leads');
   }
}
