<?php

namespace App\Http\Controllers\Agent;

use App\Models\tasks;
use Illuminate\Http\Request;
use App\Http\Controllers\Controller;
use App\Models\documents;
use App\Models\user;
use Livewire\Component;
use App\Models\AttachmentsGroup;
use Illuminate\Support\Facades\Auth;
use App\Models\accounts;
class GroupsController extends Component
{

  public function index()
  {
    $user = Auth::user();

    $leads = $user->groups;

    return view('Agent.Attachments.Groups.Groups',['leads'=>$leads]);
  }

    public function editScreen(Request $request){
      $lead = AttachmentsGroup::query()->where('id',$request->id)->first();
      $user = Auth::user();

      return view('Agent.Attachments.Groups.NewGroup',['lead'=>$lead,'type'=>'edit','user'=>$user]);

    }
    public function addScreen(Request $request){
      // $lead = user::query()->where('id',request('id'));
      $lead = new user;
      $user = Auth::user();
      if($request->account_id){
        $account = accounts::find($request->account_id);
      }
      else {
        $account = null;
      }

      return view('Agent.Attachments.Groups.NewGroup',['lead'=>$lead,'account'=>$account,'type'=>'add','user'=>$user]);

    }
    public function add(Request $request){
      $data = $request->all();
      unset($data['_token']);

      $add = AttachmentsGroup::query()->create(array_merge(array_filter($data)));
      unset($data['_token']);

      if($request->account_id){
        return redirect('/accounts/profile/'.$request->account_id);
      }
      else {
        return redirect('/groups');
      }
    }

    public function edit(Request $request){
      $data = request()->all();
      unset($data['_token']);

      $edit = AttachmentsGroup::query()->where('id',request('id'))->update(array_merge(array_filter($data)));

      return redirect('/groups');

    }

    public function delete(Request $request){
       $auth = Auth::user();

       $leads = AttachmentsGroup::find($request->id)->delete();


       return redirect('/groups');
   }
}
