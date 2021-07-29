<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class assignedGroup extends Model
{
    use HasFactory;
    public function group()
     {
        return $this->belongsTo(AttachmentsGroup::class,'group_id','id');
      }
}
