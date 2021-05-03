<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class opportunities extends Model
{
    use HasFactory;
    protected $guarded = [
        'id',

    ];
    public function currency()
    {
       return $this->belongsTo(currencies::class,'currency_id','id');
     }
     public function account()
     {
        return $this->belongsTo(accounts::class,'account_id','id');
      }
      public function sales_stage()
      {
         return $this->belongsTo(sales_stage::class,'sales_stage_id','id');
       }
    public function assiegned_attachments()
    {
        return $this->hasMany(opportunity_assiened_attachments::class,'opportunity_id','id');
    }
}
