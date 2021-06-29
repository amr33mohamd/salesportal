<?php

namespace App\Http\Controllers\Agent;

use App\Models\tasks;
use Illuminate\Http\Request;
use App\Http\Controllers\Controller;
use App\Models\sales_stage;
use App\Models\accounts;
use Illuminate\Support\Facades\Auth;
use App\Models\leads;

class TasksController extends Controller
{
  public function index(Request $request){
    $leads = tasks::query()->with('taskable')->get();
    $user = Auth::user();
    $stages = sales_stage::all();
    $fields = tasks::fields()->get();

    $accounts = accounts::query()->where('user_id',$user->id)->get();
    $userLeads = leads::query()->where('user_id',$user->id)->get();

    return view('Agent.Activities.Tasks.Tasks',['leads'=>$leads,'fields'=>$fields,'stages'=>$stages,'accounts'=>$accounts,'userLeads'=>$userLeads]);

  }


  public function editScreen(Request $request){
    $lead = tasks::query()->where('id',request('id'))->with('fieldsData.field')->first();
    $user = Auth::user();
    $fields = tasks::fields()->get();
    $userLeads = leads::query()->where('user_id',$user->id)->get();

    $accounts = accounts::query()->where('user_id',$user->id)->get();
    return view('Agent.Activities.Tasks.NewTask',['lead'=>$lead,'userLeads'=>$userLeads,'fields'=>$fields,'type'=>'edit','accounts'=>$accounts,'account_id'=>$request->account_id]);

  }

  public function edit(Request $request){
    $leads = tasks::all();
    $data = request();
    $data = request()->all();
    unset($data['_token']);
    unset($data['taskable']);

    $edit= tasks::findOrFail(request('id'));
    $edit->fields = array_merge(array_filter($data));
    $edit->save();

    $edit = tasks::query()->where('id',request('id'))->first();

    $taskable = explode(",",$request->taskable);
    if($taskable[0] == 'account'){
      $account = accounts::find($taskable[1]);
      $edit->taskable()->associate($account);
      $edit->save();
    }
    else {
      $leadUser = leads::find($taskable[1]);
      $edit->taskable()->associate($leadUser);
      $edit->save();
    }
    return redirect('/tasks');

  }
  public function addScreen(Request $request){
    $lead =new tasks;
    $user = Auth::user();
    $fields = tasks::fields()->get();
    $userLeads = leads::query()->where('user_id',$user->id)->get();

    $accounts = accounts::query()->where('user_id',$user->id)->get();
    return view('Agent.Activities.Tasks.NewTask',['lead'=>$lead,'userLeads'=>$userLeads,'fields'=>$fields,'type'=>'add','accounts'=>$accounts,'account_id'=>$request->account_id]);

  }

  public function add(Request $request){
    $leads = tasks::all();
    $data = request()->all();
    unset($data['_token']);
    unset($data['taskable']);

      $user = Auth::user();

    $add = tasks::query()->create(array_merge(["user_id"=>$user->id]));
    $taskable = explode(",",$request->taskable);
    if($taskable[0] == 'account'){
      $account = accounts::find($taskable[1]);
      $add->taskable()->associate($account);
      $add->save();
    }
    else {
      $leadUser = leads::find($taskable[1]);
      $add->taskable()->associate($leadUser);
      $add->save();
    }
    // return $request;
    $add->fields = array_merge(array_filter($data));
    $add->save();

    if($request->form_back){
      return back();
    }
    else {
      return redirect('/tasks');
    }
  }
    public function delete(Request $request){
       $auth = Auth::user();

       $leads = tasks::find($request->id)->delete();


       return Redirect::back();
   }
}
