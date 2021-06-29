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
    $fields = meetings::fields()->get();

    $accounts = accounts::query()->where('user_id',$user->id)->get();
    $userLeads = leads::query()->where('user_id',$user->id)->get();

    return view('Agent.Activities.Meetings.Meetings',['leads'=>$leads,'fields'=>$fields,'stages'=>$stages,'accounts'=>$accounts,'userLeads'=>$userLeads]);

  }


  public function editScreen(Request $request){
    $lead = meetings::query()->where('id',request('id'))->with('fieldsData.field')->first();
    $user = Auth::user();
    $fields = meetings::fields()->get();
    $userLeads = leads::query()->where('user_id',$user->id)->get();

    $accounts = accounts::query()->where('user_id',$user->id)->get();
    return view('Agent.Activities.Meetings.NewMeeting',['lead'=>$lead,'userLeads'=>$userLeads,'fields'=>$fields,'type'=>'edit','accounts'=>$accounts,'account_id'=>$request->account_id]);

  }

  public function edit(Request $request){
    $leads = meetings::all();
    $data = request();
    $data = request()->all();
    unset($data['_token']);
    unset($data['meetingable']);

    $edit= meetings::findOrFail(request('id'));
    $edit->fields = array_merge(array_filter($data));
    $edit->save();

    $edit = meetings::query()->where('id',request('id'))->first();

    $meetingable = explode(",",$request->meetingable);
    if($meetingable[0] == 'account'){
      $account = accounts::find($meetingable[1]);
      $edit->meetingable()->associate($account);
      $edit->save();
    }
    else {
      $leadUser = leads::find($meetingable[1]);
      $edit->meetingable()->associate($leadUser);
      $edit->save();
    }
    return redirect('/meetings');

  }
  public function addScreen(Request $request){
    $lead =new meetings;
    $user = Auth::user();
    $fields = meetings::fields()->get();
    $userLeads = leads::query()->where('user_id',$user->id)->get();

    $accounts = accounts::query()->where('user_id',$user->id)->get();
    return view('Agent.Activities.Meetings.NewMeeting',['lead'=>$lead,'userLeads'=>$userLeads,'fields'=>$fields,'type'=>'add','accounts'=>$accounts,'account_id'=>$request->account_id]);

  }

  public function add(Request $request){
    $leads = meetings::all();
    $data = request()->all();
    unset($data['_token']);
    unset($data['meetingable']);

      $user = Auth::user();

    $add = meetings::query()->create(array_merge(["user_id"=>$user->id]));
    $meetingable = explode(",",$request->meetingable);
    if($meetingable[0] == 'account'){
      $account = accounts::find($meetingable[1]);
      $add->meetingable()->associate($account);
      $add->save();
    }
    else {
      $leadUser = leads::find($meetingable[1]);
      $add->meetingable()->associate($leadUser);
      $add->save();
    }
    // return $request;
    $add->fields = array_merge(array_filter($data));
    $add->save();

    if($request->form_back){
      return back();
    }
    else {
      return redirect('/meetings');
    }
  }
  public function delete(Request $request){
     $auth = Auth::user();

     $leads = meetings::find($request->id)->delete();


     return redirect('/meetings');
 }
}
