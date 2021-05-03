<?php

namespace App\Http\Controllers\Agent;

use App\Models\tasks;
use App\Models\user;

use Illuminate\Http\Request;
use App\Http\Controllers\Controller;
use App\Models\documents;
use Illuminate\Support\Facades\Auth;

class SettingsController extends Controller
{
    public function index(Request $request){
      $user = Auth::user();
        $auth = Auth::user();

        $Social = $auth->documents->where('type','Social');
        $Image = $auth->documents->where('type','Image');
        $Template = $auth->documents->where('type','Template');

        $leads = documents::query();

        return view('Agent.Settings.Settings',['user'=>$user,'leads'=>$leads,'Social'=>$Social,'Image'=>$Image,'Template'=>$Template]);

    }
    public function editScreen(Request $request){
      $lead = tasks::query()->where('id',request('id'));

      return view('Agent.Marketing.Marketing',['lead'=>$lead]);

    }

    public function edit(Request $request){
      $leads = user::all();
      $data = $request->all();
      unset($data['_token']);
      unset($data['file']);

      $user = Auth::user();
      $edit = user::query()->where('id',$user->id)->update(array_merge(array_filter($data)));

      return redirect('/settings');

    }
    public function add(Request $request){
      $leads = tasks::all();
      $data = request();

      $add = tasks::query()->create(array_merge(array_filter($data)));

    }
    public function delete(Request $request){
       $auth = Auth::user();

       $leads = tasks::find($request->id)->delete();


       return Redirect::back();
   }
}
