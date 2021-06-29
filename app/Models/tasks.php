<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;
use ICIGAILLC\LaravelModelFieldBuilder\Fieldable\HasFields;
use ICIGAILLC\LaravelModelFieldBuilder\Fieldable\InteractsStaticallyWithFields;

class tasks extends Model implements  HasFields
{
    use HasFactory;
    use InteractsStaticallyWithFields;

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
