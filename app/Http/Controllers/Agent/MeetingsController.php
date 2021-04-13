<?php

namespace App\Http\Controllers\Agent;

use App\Models\calls;
use App\Models\meetings;
use Illuminate\Http\Request;
use App\Http\Controllers\Controller;
use App\Models\sales_stage;
use App\Models\accounts;
use Illuminate\Support\Facades\Auth;
use App\Models\leads;

class MeetingsController extends Controller
{
  public function index(Request $request){
    $leads = meetings::query()->with('meetingable')->get();
    $user = Auth::user();
    $stages = sales_stage::all();

    $accounts = accounts::query()->where('user_id',$user->id)->get();
    $userLeads = leads::query()->where('user_id',$user->id)->get();

    return view('Agent.Activities.Meetings.Meetings',['leads'=>$leads,'stages'=>$stages,'accounts'=>$accounts,'userLeads'=>$userLeads]);

  }


  public function edit(Request $request){
    $leads = meetings::all();
    $data = request()->all();
    unset($data['_token']);
    unset($data['callable']);

    $edit = meetings::query()->where('id',request('id'))->update(array_merge(array_filter($data)));
    $edit = meetings::query()->where('id',request('id'))->first();
    $callable = explode(",",$request->callable);
    if($callable[0] == 'account'){
      $account = accounts::find($callable[1]);
      $edit->meetingable()->associate($account);
      $edit->save();
    }
    else {
      $leadUser = leads::find($callable[1]);
      $edit->meetingable()->associate($leadUser);
      $edit->save();
    }
    return $edit;

  }
  public function add(Request $request){
    $leads = meetings::all();
    $data = request()->all();
    unset($data['_token']);
    unset($data['callable']);

    $add = meetings::query()->create(array_merge(array_filter($data)));
    $callable = explode(",",$request->callable);
    if($callable[0] == 'account'){
      $account = accounts::find($callable[1]);
      $add->meetingable()->associate($account);
      $add->save();
    }
    else {
      $leadUser = leads::find($callable[1]);
      $add->meetingable()->associate($leadUser);
      $add->save();
    }
    if($request->form_back){
      return back();
    }
    else {
      return $add;
    }
    }
  public function delete(Request $request){
     $auth = Auth::user();

     $leads = meetings::find($request->id)->delete();


     return redirect('/meetings');
 }
}
