<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class calls extends Model
{
    use HasFactory;
    protected $guarded = [
        'id',

    ];
    public function callable()
    {
        return $this->morphTo();
    }
}
