<?php

namespace App\Http\Livewire;

use App\Models\DesignedMilestones;
use http\Env\Request;
use Livewire\Component;
use App\Models\Payments;
use App\Models\Milestones;
use Illuminate\Support\Facades\Auth;

class PaymentsTable extends Component
{
  public $payments;
  public $milestones;
  public $commissions;
  public $designed_milestones;
  public function add_payment(Request  $request){
    $user = Auth::user();
    $payment = Payments::create([
      "designed_milestone_id"=>$request->designed_milestone,
      "amount"=>$request->total,
      "type"=>$request->type,
      "user_id"=>$user->id,
      "account_id"=>$request->account_id,

    ]);
    $designed_milestone = DesignedMilestones::find($request->designed_milestone);
    foreach($designed_milestone->milestones as $key =>$milestone){
        $amount="amount$key";
        $date = "date$key";
        $data = Milestones::create[{
            'amount'=>$request->$amount,
            'due_date'=>$request->$date,
            'payment_id'=>$payment->id,
            'user_id'=>$user->id
        }];
    }
    $this->reset();
  }
    public function render()
    {
      $user = Auth::user();

      $this->payments = $user->payments;
      $this->milestones = $user->milestones;
      $this->commissions = $user->commissions;
      $this->designed_milestones = DesignedMilestones::query()->with('milestones')->get();
        return view('livewire.payments-table');
    }
}
