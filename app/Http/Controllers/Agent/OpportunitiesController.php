<?php

namespace App\Http\Controllers\Agent;

use App\Models\opportunities;
use Illuminate\Http\Request;
use App\Http\Controllers\Controller;
use Illuminate\Support\Facades\Auth;
use App\Models\accounts;
use App\Models\currencies;
use App\Models\sales_stage;

class OpportunitiesController extends Controller
{
    public function index(Request $request){
      $leads = opportunities::all();
      return view('Agent.sales.opportunities.opportunities',['leads'=>$leads]);

    }
    public function editScreen(Request $request){
      $lead = opportunities::query()->where('id',request('id'))->first();
      $user = Auth::user();
      $accounts = accounts::query()->where('user_id',$user->id)->get();
      $currancies = currencies::all();
      $stages = sales_stage::all();
      return view('Agent.sales.Opportunities.newopportunity',['lead'=>$lead,'stages'=>$stages,'type'=>'edit','accounts'=>$accounts,'currancies'=>$currancies]);

    }
    public function addScreen(Request $request){
      $lead =new opportunities;
      $user = Auth::user();
      $currancies = currencies::all();

      $accounts = accounts::query()->where('user_id',$user->id)->get();
      $stages = sales_stage::all();

      return view('Agent.sales.Opportunities.newopportunity',['lead'=>$lead,'stages'=>$stages,'type'=>'add','accounts'=>$accounts,'currancies'=>$currancies]);

    }

    public function edit(Request $request){
      $leads = opportunities::all();
      $data = $request->all();
      unset($data['_token']);

      $edit = opportunities::query()->where('id',request('id'))->update(array_merge(array_filter($data)));

      return redirect('/opportunities');

    }
    public function add(Request $request){
      $leads = opportunities::all();
      $data = request()->all();
      unset($data['_token']);

      $add = opportunities::query()->create(array_merge(array_filter($data)));
      return redirect('/opportunities');


    }
    public function delete(Request $request){
       $auth = Auth::user();

       $leads = opportunities::find($request->id)->delete();


       return redirect('/opportunities');
   }
}
