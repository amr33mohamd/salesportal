<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class contacts extends Model
{
    use HasFactory;
    protected $guarded = [
        'id',

    ];
    public function account()
     {
        return $this->belongsTo(accounts::class,'account_id','id');
      }
}
