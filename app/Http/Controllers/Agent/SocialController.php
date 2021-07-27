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

      $leads = documents::all();
      if($request->type == 'social'  || $request->type == 'Social'){
        $leads = $Social;
      }
      else if($request->type == 'image' || $request->type == 'Image'){
        $leads = $Image;
      }
      else if($request->type == 'templates' || $request->type == 'Template'){
        $leads = $Template;
      }
      return view('Agent.Marketing.Marketing',['leads'=>$leads,'type'=>$request->type,'Social'=>$Social,'Image'=>$Image,'Template'=>$Template]);

    }
    public function addScreen(Request $request){

      return view('Agent.Marketing.NewMarketing');

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
      return redirect('/marketing/'.$request->type);

    }
    public function delete(Request $request){
       $auth = Auth::user();

       $leads = documents::find($request->id)->delete();


       return back();
   }
}
