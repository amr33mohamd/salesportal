<?php

namespace App\Http\Controllers\Agent;

use http\Client\Curl\User;
use Illuminate\Http\Request;
use App\Models\contacts;
use App\Http\Controllers\Controller;
use Illuminate\Support\Facades\Auth;
use App\Models\accounts;

class ContactsController extends Controller
{
    public function index(Request $request){
        $user = Auth::user();
        $leads = $user->contacts;
        $fields = contacts::fields()->get();

      return view('Agent.Sales.Members.Members',['leads'=>$leads,'fields'=>$fields]);

    }
    public function editScreen(Request $request){
      $lead = contacts::query()->where('id',request('id'))->with('fieldsData.field')->first();
      $user = Auth::user();
      $fields = contacts::fields()->get();

      $accounts = accounts::query()->where('user_id',$user->id)->get();

      return view('Agent.Sales.Members.NewMembers',['lead'=>$lead,'fields'=>$fields,'type'=>'edit','accounts'=>$accounts,'account_id'=>$request->account_id]);

    }
    public function addScreen(Request $request){
      $lead =new contacts;
      $user = Auth::user();
      $fields = contacts::fields()->get();

      $accounts = accounts::query()->where('user_id',$user->id)->get();
      return view('Agent.Sales.Members.NewMembers',['lead'=>$lead,'fields'=>$fields,'type'=>'add','accounts'=>$accounts,'account_id'=>$request->account_id]);

    }

    public function edit(Request $request){
      $leads = contacts::all();
      $data = $request->all();
      unset($data['_token']);
      $contact= contacts::findOrFail(request('id'));
      $contact->fields = array_merge(array_filter($data));
      $contact->save();
      // $edit = contacts::query()->where('id',request('id'))->update(array_merge(array_filter($data)));

      return redirect('/members');

    }
    public function add(Request $request){
      $leads = contacts::all();
      $data = $request->all();
      $user = Auth::user();
      unset($data['user_id']);
      unset($data['account_id']);

      $add = contacts::query()->create(['account_id'=>$request->account_id,'user_id'=>$user->id]);


       $add->fields = array_merge(array_filter($data));
       $add->save();
// return $request->account_id;
      // return $add;
      return redirect('/members');

    }
    public function delete(Request $request){
       $auth = Auth::user();

       $leads = contacts::find($request->id)->delete();


       return redirect('/members');
   }
}
