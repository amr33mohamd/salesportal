<?php

namespace App\Http\Controllers\Agent;

use App\Models\tasks;
use Illuminate\Http\Request;
use App\Http\Controllers\Controller;
use App\Models\documents;
use Illuminate\Support\Facades\Auth;
use App\Models\Attachments;
use App\Models\user;

class AttachmentsController extends Controller
{
    public function index(Request $request){
      $auth = Auth::user();
      $leads = Attachments::query()->where('group_id',$request->id)->get();
      return view('Agent.Attachments.Attachments.Attachments',['leads'=>$leads,'id'=>$request->id]);

    }
    public function addScreen(Request $request){
      // $lead = user::query()->where('id',request('id'));
      $lead = new user;
      $user = Auth::user();
      return view('Agent.Attachments.Attachments.NewAttachment',['lead'=>$lead,'type'=>'add','user'=>$user,'id'=>$request->id]);

    }
    public function editScreen(Request $request){
      $lead = Attachments::query()->where('id',$request->id)->first();
      $user = Auth::user();

      return view('Agent.Attachments.Attachments.NewAttachment',['lead'=>$lead,'id'=>$request->id,'type'=>'edit','user'=>$user]);

    }

    public function edit(Request $request){
      $leads = tasks::all();
      $data = $request->all();
      unset($data['_token']);
      unset($data['file']);

      $edit = Attachments::query()->where('id',request('id'))->update(array_merge(array_filter($data)));
      $group_id = Attachments::query()->where('id',request('id'))->first()->group_id;
      return redirect('/group/attachments/'+$group_id);

    }
    public function add(Request $request){
      $leads = documents::all();
      // $data = request();
      $auth = Auth::user();

      $data = $request->all();
      unset($data['_token']);
      unset($data['file']);

      $add = Attachments::query()->create(array_merge(array_filter($data),['user_id' => $auth->id]));

      $add->addMedia($request->file)->toMediaCollection();
      return redirect('/group/attachments/'.$add->group_id);

    }
    public function delete(Request $request){
       $auth = Auth::user();

       $leads = Attachments::find($request->id)->delete();


       return back();
   }
}
