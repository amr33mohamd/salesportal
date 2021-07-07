<?php

namespace App\Http\Controllers\Agent;

use App\Models\tasks;
use Illuminate\Http\Request;
use App\Http\Controllers\Controller;
use App\Models\documents;
use App\Models\user;
use Livewire\Component;

use Illuminate\Support\Facades\Auth;

class EmployeesController extends Component
{

  public function index()
  {
    $user = Auth::user();

    $employees = $user->employees;

    return view('Agent.Employees.Employees',['leads'=>$employees]);
  }

    public function editScreen(Request $request){
      $lead = user::query()->where('id',$request->id)->first();
      $user = Auth::user();

      return view('Agent.Employees.NewEmployee',['lead'=>$lead,'type'=>'edit','user'=>$user]);

    }
    public function addScreen(Request $request){
      // $lead = user::query()->where('id',request('id'));
      $lead = new user;
      $user = Auth::user();
      return view('Agent.Employees.NewEmployee',['lead'=>$lead,'type'=>'add','user'=>$user]);

    }
    public function add(Request $request){
      $data = $request->all();

      $add = user::query()->create(array_merge(array_filter($data)));


      return redirect('/employees');
    }

    public function edit(Request $request){
      $leads = tasks::all();
      $data = request();

      $edit = tasks::query()->where('id',request('id'))->update(array_merge(array_filter($data)));

      return redirect('/employees');

    }

    public function delete(Request $request){
       $auth = Auth::user();

       $leads = user::find($request->id)->delete();


       return redirect('/employees');
   }
}
