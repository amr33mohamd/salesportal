<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class PaymentItem extends Model
{
    use HasFactory;
    protected $guarded = [
        'id',

    ];
    public function item()
     {
        return $this->hasOne(items::class,'id','item_id');
      }
}
