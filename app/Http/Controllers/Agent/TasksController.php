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

    $accounts = accounts::query()->where('user_id',$user->id)->get();
    $userLeads = leads::query()->where('user_id',$user->id)->get();

    return view('Agent.activities.tasks.tasks',['leads'=>$leads,'stages'=>$stages,'accounts'=>$accounts,'userLeads'=>$userLeads]);

  }


  public function edit(Request $request){
    $leads = tasks::all();
    $data = request();
    $data = request()->all();
    unset($data['_token']);
    unset($data['callable']);

    $edit = tasks::query()->where('id',request('id'))->update(array_merge(array_filter($data)));
    $edit = tasks::query()->where('id',request('id'))->first();

    $callable = explode(",",$request->callable);
    if($callable[0] == 'account'){
      $account = accounts::find($callable[1]);
      $edit->taskable()->associate($account);
      $edit->save();
    }
    else {
      $leadUser = leads::find($callable[1]);
      $edit->taskable()->associate($leadUser);
      $edit->save();
    }
    return $edit;

  }

  public function add(Request $request){
    $leads = tasks::all();
    $data = request()->all();
    unset($data['_token']);
    unset($data['callable']);

    $add = tasks::query()->create(array_merge(array_filter($data)));
    $callable = explode(",",$request->callable);
    if($callable[0] == 'account'){
      $account = accounts::find($callable[1]);
      $add->taskable()->associate($account);
      $add->save();
    }
    else {
      $leadUser = leads::find($callable[1]);
      $add->taskable()->associate($leadUser);
      $add->save();
    }
    return $add;
  }
    public function delete(Request $request){
       $auth = Auth::user();

       $leads = tasks::find($request->id)->delete();


       return Redirect::back();
   }
}
