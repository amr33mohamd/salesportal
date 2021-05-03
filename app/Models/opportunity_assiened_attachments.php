<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class opportunity_assiened_attachments extends Model
{
    use HasFactory;
    protected $guarded = [
        'id',

    ];
    public function attachment()
    {
        return $this->hasOne(documents::class,'id','document_id');
    }
}
