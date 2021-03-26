<?php

namespace App\Http\Controllers\Agent;

use App\Models\tasks;
use Illuminate\Http\Request;
use App\Http\Controllers\Controller;
use App\Models\documents;
use Illuminate\Support\Facades\Auth;

class SocialController extends Controller
{
    public function index(Request $request){
      $auth = Auth::user();
      $Social = $auth->documents->where('type','Social');
      $Image = $auth->documents->where('type','Image');
      $Template = $auth->documents->where('type','Template');

      $leads = documents::query();
      return view('Agent.marketing.marketing',['leads'=>$leads,'Social'=>$Social,'Image'=>$Image,'Template'=>$Template]);

    }
    public function editScreen(Request $request){
      $lead = tasks::query()->where('id',request('id'));

      return view('Agent.Marketing.Marketing',['lead'=>$lead]);

    }

    public function edit(Request $request){
      $leads = tasks::all();
      $data = $request->all();
      unset($data['_token']);
      unset($data['file']);

      $edit = documents::query()->where('id',request('id'))->update(array_merge(array_filter($data)));

      return Redirect::back();

    }
    public function add(Request $request){
      $leads = documents::all();
      // $data = request();
      $auth = Auth::user();

      $data = $request->all();
      unset($data['_token']);
      unset($data['file']);

      $add = documents::query()->create(array_merge(array_filter($data),['user_id' => $auth->id]));

      $add->addMedia($request->file)->toMediaCollection();
      return redirect('/marketing');

    }
    public function delete(Request $request){
       $auth = Auth::user();

       $leads = documents::find($request->id)->delete();


       return redirect('/marketing');
   }
}
