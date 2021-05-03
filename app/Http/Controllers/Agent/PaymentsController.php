<?php

namespace App\Http\Controllers\Agent;

use App\Models\DesignedMilestones;
use App\Models\Milestones;
use Illuminate\Http\Request;
use App\Http\Controllers\Controller;
use App\Models\Payments;
use Illuminate\Support\Facades\Auth;

class PaymentsController extends Controller
{

  public function index(Request $request){
    // $leads = Payments::get();
      $user = Auth::user();
      $payments = $user->payments;
      $milestones = $user->milestones;
      $commissions = $user->commissions;
      $designed_milestones = DesignedMilestones::query()->with('milestones')->get();
      $accounts = $user->accounts;
      return view('Agent.Payments.Payments',['accounts'=>$accounts,'payments'=>$payments,'milestones'=>$milestones,'commissions'=>$commissions,'designed_milestones'=>$designed_milestones]);

  }
  public function invoice(Request $request){
    // $leads = Payments::get();
    return view('Agent.Payments.Invoice');

  }
    public function add_payment(Request $request){
        $user = Auth::user();
        $payment = Payments::create([
            "designed_milestone_id"=>$request->designed_milestone,
            "amount"=>$request->total,
            "type"=>$request->type,
            "user_id"=>$user->id,
            "account_id"=>$request->account_id,

        ]);
        $designed_milestone = DesignedMilestones::find($request->designed_milestone);
        if($request->designed_milestone != 'cash') {
            foreach ($designed_milestone->milestones as $key => $milestone) {
                $amount = "amount$key";
                $date = "date$key";
                $data = Milestones::create([
                    'amount' => $request->$amount,
                    'due_date' => $request->{"date" . $key},
                    'payment_id' => $payment->id,
                    'user_id' => $user->id
                ]);
            }
        }
        return back();
    }
}
