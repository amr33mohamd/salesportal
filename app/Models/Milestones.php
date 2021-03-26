<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class Milestones extends Model
{
    use HasFactory;
    protected $guarded = [
        'id',

    ];
    public function payment()
     {
        return $this->belongsTo(Payments::class,'payment_id','id');
      }
      
}
