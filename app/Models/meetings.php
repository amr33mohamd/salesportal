<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class meetings extends Model
{
    use HasFactory;
    protected $guarded = [
        'id',

    ];
    public function meetingable()
    {
        return $this->morphTo();
    }
}
