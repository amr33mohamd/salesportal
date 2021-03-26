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
  public $employees;

  public function render()
  {
    $user = Auth::user();

    $this->employees = $user->employees;

    $leads = tasks::all();
    return view('Agent.Employees.Employees')->extends('Agent.Layout.App')->section('centent');
  }

    public function editScreen(Request $request){
      $lead = tasks::query()->where('id',request('id'));

      return view('Agent.marketing.marketing',['lead'=>$lead]);

    }
    public function add(Request $request){
      $data = $request->all();

      $add = user::query()->create(array_merge(array_filter($data)));


      $this->reset();
    }

    public function edit(Request $request){
      $leads = tasks::all();
      $data = request();

      $edit = tasks::query()->where('id',request('id'))->update(array_merge(array_filter($data)));

      return Redirect::back();

    }

    public function delete(Request $request){
       $auth = Auth::user();

       $leads = user::find($request->id)->delete();


       return redirect('/employees');
   }
}
