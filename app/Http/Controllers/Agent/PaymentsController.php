<?php

namespace App\Http\Controllers\Agent;

use App\Models\DesignedMilestones;
use App\Models\Milestones;
use Illuminate\Http\Request;
use App\Http\Controllers\Controller;
use App\Models\Payments;
use Illuminate\Support\Facades\Auth;
use App\Models\PaymentItem;
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
      if($request->type == 'milestones'){
        $leads = $milestones;
      }
      elseif ($request->type == 'wallet') {
        $leads = $milestones->where('status','done');
      }
      elseif ($request->type == 'invoices') {
        $leads = $payments;
      }
      elseif ($request->type == 'commissions') {
        $leads = $commissions;
      }
      return view('Agent.Payments.Payments',['accounts'=>$accounts,'leads'=>$leads,'type'=>$request->type,'payments'=>$payments,'milestones'=>$milestones,'commissions'=>$commissions,'designed_milestones'=>$designed_milestones]);

  }
  public function invoice(Request $request){
    // $leads = Payments::get();
    return view('Agent.Payments.Invoice');

  }
  public function addPaymentScreen(Request $request){
    // $leads = Payments::get();
    $designed_milestones = DesignedMilestones::query()->with('milestones')->get();
    $user = Auth::user();
    $accounts = $user->accounts;

    return view('Agent.Payments.NewPayment',['designed_milestones'=>$designed_milestones,'accounts'=>$accounts,'user'=>$user]);

  }
    public function add_payment(Request $request){
        $user = Auth::user();
        if($request->designed_milestone == 'cash'){
          $payment = Payments::create([
              "amount"=>$request->total,
              "type"=>$request->type,
              "user_id"=>$user->id,
              "account_id"=>$request->account_id,

          ]);
        }
        else {
          $payment = Payments::create([
              "designed_milestone_id"=>$request->designed_milestone,
              "amount"=>$request->total,
              "type"=>$request->type,
              "user_id"=>$user->id,
              "account_id"=>$request->account_id,

          ]);
        }

        if($request->type == 'items'){
          foreach($request->items as $item){

            PaymentItem::create([
              'payment_id'=>$payment->id,
              'item_id'=>explode('/',$item)[0]
            ]);
          }
        }
        $designed_milestone = DesignedMilestones::find($request->designed_milestone);
        if($request->designed_milestone != 'cash') {
            foreach ($designed_milestone->milestones as $key => $milestone) {
                $amount = "amount$key";
                $date = "date$key";
                $data = Milestones::create([
                    'amount' => $request->$amount,
                    'due_date' => $request->{"date" . $key},
                    'payment_id' => $payment->id,
                    'user_id' => $user->id,
                    'note'=>$request->{"description" . $key},
                    'method'=>$request->{"method" . $key},
                ]);
            }
        }
        return redirect('/payments/milestones');
    }
}
