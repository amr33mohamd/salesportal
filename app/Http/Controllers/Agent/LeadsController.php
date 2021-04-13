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

      return view('Agent.Sales.Leads.Leads',['leads'=>$leads]);


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
return view('Agent.Sales.Leads.NewLead',['lead'=>$lead,'sources'=>$sources,'mediums'=>$mediums,'industries'=>$industries,'currancies'=>$currancies,'type'=>'edit','statuses'=>$statuses,'education_qualifications'=>$educations,'hear_about_uses'=>$hear_about_uses,'nationalities'=>$nationalities]);

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
      return view('Agent.Sales.Leads.NewLead',['lead'=>$lead,'sources'=>$sources,'mediums'=>$mediums,'industries'=>$industries,'currancies'=>$currancies,'type'=>'add','statuses'=>$statuses,'education_qualifications'=>$educations,'hear_about_uses'=>$hear_about_uses,'nationalities'=>$nationalities]);

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
      $edit = leads::query()->where('id',request('id'))->update(array_merge(array_filter($data)));

      return redirect('/leads');

    }
    public function add(Request $request){
      $leads = leads::all();
      $data = $request->all();
      $data['user_id'] = Auth::user()->id;
      $add = leads::query()->create(array_merge(array_filter($data)));
      unset($data['file']);

      if(isset($request->file)){
         $add->addMedia($request->file)->toMediaCollection();
      }
      return redirect('/leads');
    }
    public function convert(Request $request){
      $row_object = leads::where('id', $request->id)->first();


        // convert to array
        $row_array = $row_object->toArray();

        // unset the row id (assuming id autoincrements)
        unset($row_array['id']);
        unset($row_array['lead_owner']);
        unset($row_array['created_at']);
        unset($row_array['updated_at']);


        // insert the row data into the new table (assuming all fields are the same)
        accounts::insert($row_array);
        $leads = leads::find($request->id)->delete();

        return redirect('/accounts');
    }
    public function delete(Request $request){
       $auth = Auth::user();

       $leads = leads::find($request->id)->delete();


       return redirect('/leads');
   }
}
