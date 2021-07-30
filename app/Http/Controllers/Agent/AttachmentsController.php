<?php

namespace App\Http\Controllers\Agent;

use App\Models\tasks;
use Illuminate\Http\Request;
use App\Http\Controllers\Controller;
use App\Models\documents;
use Illuminate\Support\Facades\Auth;
use App\Models\Attachments;
use App\Models\user;
use App\Models\accounts;
use App\Models\uploadedAttachment;
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
      if($request->account_id ){
        return view('Agent.Attachments.Attachments.NewAttachment',['account_id'=>$request->account_id,'account'=>null,'lead'=>$lead,'type'=>'add','user'=>$user,'id'=>$request->id]);

      }
      else {
        return view('Agent.Attachments.Attachments.NewAttachment',['account'=>null,'lead'=>$lead,'type'=>'add','user'=>$user,'id'=>$request->id]);
      }

    }
    public function editScreen(Request $request){
      $lead = Attachments::query()->where('id',$request->id)->first();
      $user = Auth::user();
      if($request->account_id != 0){
        $account = accounts::find($request->account_id);
      }
      else {
        $account = null;
      }
      return view('Agent.Attachments.Attachments.NewAttachment',['account_id'=>$account->id,'lead'=>$lead,'account'=>$account,'id'=>$request->id,'type'=>'edit','user'=>$user]);

    }

    public function edit(Request $request){
      $leads = tasks::all();
      $data = $request->all();
      unset($data['_token']);
      unset($data['file']);
      unset($data['account_id']);

      if($request->account_id){
        $account = accounts::find($request->account_id);
        if($request->file){

          $attachmentDelete = $account->uploaded_attachments->where('attachment_id',$request->id);
          if($attachmentDelete->count() != 0){
            $attachmentDelete->first()->delete();
          }
          $uploaded = uploadedAttachment::create([
            'account_id'=>$account->id,
            'attachment_id'=>$request->id,
          ]);
          $uploaded->addMedia($request->file)->toMediaCollection();
        }

      }
      $edit = Attachments::query()->where('id',request('id'))->update(array_merge(array_filter($data)));
      $group_id = Attachments::query()->where('id',request('id'))->first()->group_id;
      if($request->account_id){
        return redirect('/accounts/profile/'.$request->account_id.'?group_id='.$group_id);
      }
      else {
        return redirect('/group/attachments/'.$group_id);
      }

    }
    public function add(Request $request){
      $leads = documents::all();
      // $data = request();
      $auth = Auth::user();

      $data = $request->all();
      unset($data['_token']);
      unset($data['file']);

      $add = Attachments::query()->create(array_merge(array_filter($data),['user_id' => $auth->id]));

      // $add->addMedia($request->file)->toMediaCollection();
      if($request->account_id){
        return redirect('/accounts/profile/'.$request->account_id.'?group_id='.$add->group_id);
      }
      else {
        return redirect('/group/attachments/'.$add->group_id);
      }

    }
    public function delete(Request $request){
       $auth = Auth::user();

       $leads = Attachments::find($request->id)->delete();


       return back();
   }
}
