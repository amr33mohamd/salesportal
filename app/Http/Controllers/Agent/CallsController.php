<?php

namespace App\Http\Controllers\Agent;

use App\Models\calls;
use App\Models\opportunities;
use Illuminate\Http\Request;
use App\Http\Controllers\Controller;
use App\Models\sales_stage;
use App\Models\accounts;
use Illuminate\Support\Facades\Auth;
use App\Models\leads;

class CallsController extends Controller
{
    public function index(Request $request){
      $leads = calls::query()->with('callable')->get();
      $user = Auth::user();
      $stages = sales_stage::all();

      $accounts = accounts::query()->where('user_id',$user->id)->get();
      $userLeads = leads::query()->where('user_id',$user->id)->get();

      return view('Agent.Activities.Calls.Calls',['leads'=>$leads,'stages'=>$stages,'accounts'=>$accounts,'userLeads'=>$userLeads]);

    }
    public function editScreen(Request $request){
      $lead = calls::query()->where('id',request('id'));

      return view('welcome',['lead'=>$lead]);

    }

    public function edit(Request $request){
      $leads = calls::all();
      $data = request();
      $data = request()->all();
      unset($data['_token']);
      unset($data['callable']);

      $edit = calls::query()->where('id',request('id'))->update(array_merge(array_filter($data)));
      $edit = calls::query()->where('id',request('id'))->first();

      $callable = explode(",",$request->callable);
      if($callable[0] == 'account'){
        $account = accounts::find($callable[1]);
        $edit->callable()->associate($account);
        $edit->save();
      }
      else {
        $leadUser = leads::find($callable[1]);
        $edit->callable()->associate($leadUser);
        $edit->save();
      }
      return $edit;

    }

    public function add(Request $request){
      $leads = calls::all();
      $data = request()->all();
      unset($data['_token']);
      unset($data['callable']);

      $add = calls::query()->create(array_merge(array_filter($data)));
      $callable = explode(",",$request->callable);
      if($callable[0] == 'account'){
        $account = accounts::find($callable[1]);
        $add->callable()->associate($account);
        $add->save();
      }
      else {
        $leadUser = leads::find($callable[1]);
        $add->callable()->associate($leadUser);
        $add->save();
      }
      // return $request;
      if($request->form_back){
        return back();
      }
      else {
        return $add;
      }
    }
    public function delete(Request $request){
       $auth = Auth::user();

       $leads = calls::find($request->id)->delete();


       return redirect('/calls');
   }
}
