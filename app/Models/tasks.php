<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class tasks extends Model
{
    use HasFactory;
    protected $guarded = [
        'id',

    ];
    public function currency()
    {
       return $this->belongsTo(currencies::class,'currency_id','id');
     }
     public function taskable()
     {
         return $this->morphTo();
     }
}
