<?php

namespace App\Http\Livewire;

use Livewire\Component;
use App\Models\Payments;
use App\Models\Milestones;
use Illuminate\Support\Facades\Auth;

class PaymentsTable extends Component
{
  public $payments;
  public $milestones;
  public $commissions;
  public function add_payment(){

    Payments::create([
      "designed_milestone_id"=>1,
      "amount"=>600,
      "type"=>"Cashe",
      "user_id"=>1,
      "account_id"=>1
    ]);
    $this->reset();
  }
    public function render()
    {
      $user = Auth::user();

      $this->payments = $user->payments;
      $this->milestones = $user->milestones;
      $this->commissions = $user->commissions;

        return view('livewire.payments-table');
    }
}
