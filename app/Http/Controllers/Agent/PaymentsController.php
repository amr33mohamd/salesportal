<?php

namespace App\Http\Controllers\Agent;

use Illuminate\Http\Request;
use App\Http\Controllers\Controller;
use App\Models\Payments;
class PaymentsController extends Controller
{

  public function index(Request $request){
    // $leads = Payments::get();
    return view('Agent.Payments.Payments');

  }
  public function invoice(Request $request){
    // $leads = Payments::get();
    return view('Agent.Payments.Invoice');

  }
}
