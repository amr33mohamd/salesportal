<?php

namespace App\Http\Controllers\Agent;

use Illuminate\Http\Request;
use App\Models\accounts;
use App\Http\Controllers\Controller;
use Illuminate\Support\Facades\Auth;

use App\Models\User;
use App\Models\lead_status;
use App\Models\hear_about_us;
use App\Models\nationality;
use App\Models\education_qualifications;
use App\Models\industry;
use App\Models\currencies;
use App\Models\traffic_source;
use App\Models\traffic_mediums;
class AccountsController extends Controller
{
  public function index(Request $request){
    $user = Auth::user();
    $leads = $user->accounts;

    return view('Agent.Sales.Accounts.Accounts',['leads'=>$leads]);


  }

  public function profile(Request $request){
    $user = Auth::user();
    $account = accounts::find($request->id);
    if($user->follow_id ==null){
      $documents = $user->documents;
    }
    else{
      $documents = user::find($user->follow_id)->first()->documents;
    }
    // return $account;
    return view('Agent.Sales.Accounts.Profile',['account'=>$account,'documents'=>$documents]);


  }
  public function editScreen(Request $request){
    $lead = accounts::query()->where('id',request('id'))->first();
    $user = Auth::user();
     $statuses = lead_status::all();
$hear_about_uses = hear_about_us::all();
$nationalities = nationality::all();
$educations = education_qualifications::all();
$industries = industry::all();
$currancies = currencies::all();
$sources = traffic_source::all();
$mediums = traffic_mediums::all();
return view('Agent.Sales.Accounts.NewAccount',['lead'=>$lead,'sources'=>$sources,'mediums'=>$mediums,'industries'=>$industries,'currancies'=>$currancies,'type'=>'edit','statuses'=>$statuses,'education_qualifications'=>$educations,'hear_about_uses'=>$hear_about_uses,'nationalities'=>$nationalities]);

  }
  public function addScreen(Request $request){
    $lead = new accounts;
    $user = Auth::user();
     $statuses = lead_status::all();
     $hear_about_uses = hear_about_us::all();
     $nationalities = nationality::all();
     $educations = education_qualifications::all();
     $industries = industry::all();
     $currancies = currencies::all();
     $sources = traffic_source::all();
     $mediums = traffic_mediums::all();
    return view('Agent.Sales.Accounts.NewAccount',['lead'=>$lead,'sources'=>$sources,'mediums'=>$mediums,'industries'=>$industries,'currancies'=>$currancies,'type'=>'add','statuses'=>$statuses,'education_qualifications'=>$educations,'hear_about_uses'=>$hear_about_uses,'nationalities'=>$nationalities]);

  }
  public function edit(Request $request){
    $leads = accounts::all();
    $data = $request->all();
    unset($data['_token']);
    unset($data['file']);

    if($request->file){
      $edit =  accounts::query()->where('id',request('id'))->first()->addMedia($request->file)->toMediaCollection();
       // echo $edit;
    }
    // $edit = accounts::query()->where('id',request('id'))->update(array_merge(array_filter($data)));

    return redirect('/accounts');

  }
  public function add(Request $request){
    $leads = accounts::all();
    $data = $request->all();
    $data['user_id'] = Auth::user()->id;
    unset($data['file']);

    $add = accounts::query()->create(array_merge(array_filter($data)));
    if(isset($request->file)){
       $add->addMedia($request->file)->toMediaCollection();
    }
    // echo $add;
    return redirect('/accounts');
  }
  public function delete(Request $request){
     $auth = Auth::user();

     $leads = accounts::find($request->id)->delete();


     return redirect('/accounts');
 }
}
