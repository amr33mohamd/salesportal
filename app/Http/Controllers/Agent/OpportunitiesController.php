<?php

namespace App\Http\Controllers\Agent;

use App\Models\account_assiened_attachments;
use App\Models\account_attachments;
use App\Models\opportunities;
use App\Models\opportunity_assiened_attachments;
use App\Models\User;
use Illuminate\Http\Request;
use App\Http\Controllers\Controller;
use Illuminate\Support\Facades\Auth;
use App\Models\accounts;
use App\Models\currencies;
use App\Models\sales_stage;

class OpportunitiesController extends Controller
{
    public function index(Request $request){
        $user = Auth::user();
        $leads = $user->cases;
      return view('Agent.Sales.Opportunities.Opportunities',['leads'=>$leads]);

    }
    public function profile(Request $request){
        $user = Auth::user();
        $opportunity = opportunities::query()->where('id',request('id'))->first();

        $account = $opportunity->account()->first();
        if($user->follow_id ==null){
            $documents = $user->documents;
        }
        else{
            $documents = user::find($user->follow_id)->first()->documents;
        }
        // return $account;
        return view('Agent.Sales.Opportunities.Profile',['account'=>$account,'documents'=>$documents,'opportunity'=>$opportunity]);


    }

    public function assin_attachment(Request $request){
        $user = Auth::user();
        $documents = opportunity_assiened_attachments::create(['opportunity_id'=>$request->opportunity_id,'document_id'=>$request->document_id]);
        return back();
    }
    public function delete_assin_attachment(Request $request){
        $user = Auth::user();
        $documents = opportunity_assiened_attachments::query()->where('id',$request->id)->delete();
        return back();
    }
    public function editScreen(Request $request){
      $lead = opportunities::query()->where('id',request('id'))->first();
      $user = Auth::user();
      $accounts = accounts::query()->where('user_id',$user->id)->get();
      $currancies = currencies::all();
      $stages = sales_stage::all();
      return view('Agent.Sales.Opportunities.NewOpportunity',['lead'=>$lead,'stages'=>$stages,'type'=>'edit','accounts'=>$accounts,'currancies'=>$currancies]);

    }
    public function addScreen(Request $request){
      $lead =new opportunities;
      $user = Auth::user();
      $currancies = currencies::all();

      $accounts = accounts::query()->where('user_id',$user->id)->get();
      $stages = sales_stage::all();

      return view('Agent.Sales.Opportunities.NewOpportunity',['lead'=>$lead,'stages'=>$stages,'type'=>'add','accounts'=>$accounts,'currancies'=>$currancies]);

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
