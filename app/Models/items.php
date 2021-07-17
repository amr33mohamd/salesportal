<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;
use ICIGAILLC\LaravelModelFieldBuilder\Fieldable\HasFields;
use ICIGAILLC\LaravelModelFieldBuilder\Fieldable\InteractsStaticallyWithFields;

class items extends Model implements  HasFields
{
    use HasFactory;
    use InteractsStaticallyWithFields;
    protected $with= ["fieldsData"];
    protected $guarded = [
        'id',

    ];
}
