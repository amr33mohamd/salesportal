<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class account_assiened_attachments extends Model
{
    use HasFactory;
    public function attachment()
    {
       return $this->hasOne(documents::class,'document_id','id');
     }
}
