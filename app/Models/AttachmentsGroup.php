<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class AttachmentsGroup extends Model
{
    use HasFactory;
    protected $guarded = [
        'id',
    ];
    public function attachments()
     {
        return $this->hasMany(attachments::class,'group_id','id');
      }
}
