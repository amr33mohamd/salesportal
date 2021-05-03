<?php

namespace App\Models;

use ICIGAILLC\LaravelModelFieldBuilder\Fieldable\HasFields;
use ICIGAILLC\LaravelModelFieldBuilder\Fieldable\InteractsStaticallyWithFields;
use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class contacts extends Model implements HasFields
{
    use InteractsStaticallyWithFields;

    use HasFactory;
    protected $guarded = [
        'id',

    ];
    public function account()
     {
        return $this->belongsTo(accounts::class,'account_id','id');
      }
}
