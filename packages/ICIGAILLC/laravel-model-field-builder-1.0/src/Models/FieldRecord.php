<?php

namespace ICIGAILLC\LaravelModelFieldBuilder\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class FieldRecord extends Model
{
    use HasFactory;

    protected $guarded= [];

    public function field() {
        return $this->belongsTo(Field::class);
    }

    public function modelable() {
        return $this->morphTo();
    }
}
