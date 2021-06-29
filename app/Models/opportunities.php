<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;
use Spatie\MediaLibrary\HasMedia;
use Spatie\MediaLibrary\InteractsWithMedia;
use ICIGAILLC\LaravelModelFieldBuilder\Fieldable\HasFields;
use ICIGAILLC\LaravelModelFieldBuilder\Fieldable\InteractsStaticallyWithFields;

class opportunities extends Model implements HasMedia, HasFields
{
    use HasFactory;
    use HasFactory;
    use InteractsWithMedia;
    use InteractsStaticallyWithFields;
    protected $with= ["fieldsData"];

    protected $guarded = [
        'id',

    ];
    public function currency()
    {
       return $this->belongsTo(currencies::class,'currency_id','id');
     }
     public function account()
     {
        return $this->belongsTo(accounts::class,'account_id','id');
      }
      public function sales_stage()
      {
         return $this->belongsTo(sales_stage::class,'sales_stage_id','id');
       }
    public function assiegned_attachments()
    {
        return $this->hasMany(opportunity_assiened_attachments::class,'opportunity_id','id');
    }
}
