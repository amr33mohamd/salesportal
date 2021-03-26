<?php

namespace App\Http\Controllers\Agent;

use Illuminate\Http\Request;
use App\Models\User;
use App\Http\Controllers\Controller;
use Illuminate\Support\Facades\Auth;

class AffiliateController extends Controller
{
  public function index(Request $request){
    $leads = Auth::user()->with('followers.followers')->get();
    return view('Agent.Affiliate.Affiliate',['leads'=>$leads]);
  }


}
