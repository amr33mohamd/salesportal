<?php

namespace ICIGAILLC\LaravelModelFieldBuilder\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class FieldRule extends Model
{
    use HasFactory;

    public function field()
    {
        return $this->belongsTo(Field::class);
    }
}
