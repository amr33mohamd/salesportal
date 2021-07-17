<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class Payments extends Model
{
    use HasFactory;
    protected $guarded = [
        'id',

    ];
    public function account()
     {
        return $this->belongsTo(accounts::class,'account_id','id');
      }
      public function milestones()
       {
          return $this->hasMany(Milestones::class,'payment_id','id');
        }
        public function items()
         {
            return $this->hasMany(PaymentItem::class,'payment_id','id');
          }
}
