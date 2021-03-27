<?php

namespace App\Http\Controllers\Agent;

use Illuminate\Http\Request;
use App\Models\contacts;
use App\Http\Controllers\Controller;
use Illuminate\Support\Facades\Auth;
use App\Models\accounts;

class ContactsController extends Controller
{
    public function index(Request $request){
      $leads = contacts::all();
      return view('Agent.Sales.Members.Members',['leads'=>$leads]);

    }
    public function editScreen(Request $request){
      $lead = contacts::query()->where('id',request('id'))->first();
      $user = Auth::user();

      $accounts = accounts::query()->where('user_id',$user->id)->get();

      return view('Agent.Sales.Members.NewMembers',['lead'=>$lead,'type'=>'edit','accounts'=>$accounts]);

    }
    public function addScreen(Request $request){
      $lead =new contacts;
      $user = Auth::user();
      $accounts = accounts::query()->where('user_id',$user->id)->get();
      return view('Agent.Sales.Members.NewMembers',['lead'=>$lead,'type'=>'add','accounts'=>$accounts]);

    }

    public function edit(Request $request){
      $leads = contacts::all();
      $data = $request->all();
      unset($data['_token']);

      $edit = contacts::query()->where('id',request('id'))->update(array_merge(array_filter($data)));

      return redirect('/members');

    }
    public function add(Request $request){
      $leads = contacts::all();
      $data = $request->all();

      $add = contacts::query()->create(array_merge(array_filter($data)));
      return redirect('/members');

    }
    public function delete(Request $request){
       $auth = Auth::user();

       $leads = contacts::find($request->id)->delete();


       return redirect('/members');
   }
}
