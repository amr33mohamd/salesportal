<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;
use Spatie\MediaLibrary\HasMedia;
use Spatie\MediaLibrary\InteractsWithMedia;
use ICIGAILLC\LaravelModelFieldBuilder\Fieldable\HasFields;
use ICIGAILLC\LaravelModelFieldBuilder\Fieldable\InteractsStaticallyWithFields;
class accounts extends Model implements HasMedia, HasFields
{
    use HasFactory;
    use InteractsWithMedia;
    use InteractsStaticallyWithFields;
    protected $with= ["fieldsData"];
    protected $guarded = [
        'id',
    ];
    public function lead()
    {
       return $this->belongsTo(leads::class,'lead_id','id');
     }

     public function currency()
     {
        return $this->belongsTo(currencies::class,'currency_id','id');
      }
      public function members()
      {
         return $this->belongsTo(currencies::class,'currency_id','id');
       }
     public function status()
      {
         return $this->belongsTo(lead_status::class,'status_id','id');
       }
     public function nationality()
       {
          return $this->belongsTo(nationality::class,'nationality_id','id');
        }
       public function user()
        {
           return $this->belongsTo(User::class,'user_id','id');
         }
         public function traffic_source()
          {
             return $this->belongsTo(traffic_source::class,'traffic_source_id','id');
           }
           public function industry()
            {
               return $this->belongsTo(traffic_source::class,'industry_id','id');
             }
             public function application_type()
              {
                 return $this->belongsTo(application_types::class,'application_type_id','id');
               }
               public function payments()
                {
                   return $this->hasMany(Payments::class,'account_id','id');
                 }
                 public function attachments()
                  {
                     return $this->hasMany(account_attachments::class,'account_id','id');
                   }
                   public function assiegned_attachments()
                    {
                       return $this->hasMany(account_assiened_attachments::class,'account_id','id');
                     }

               public function education_qualification()
                {
                   return $this->belongsTo(education_qualifications::class,'education_qualification_id','id');
                 }
                 public function cases()
                  {
                     return $this->hasMany(opportunities::class,'account_id','id');
                   }
                 public function traffic_medium()
                  {
                     return $this->belongsTo(traffic_mediums::class,'traffic_medium_id','id');
                   }
                   public function hear_about_us()
                    {
                       return $this->belongsTo(hear_about_uses::class,'hear_about_us_id','id');
                     }
                     public function calls()
                         {
                             return $this->morphMany(calls::class, 'callable');
                         }
                         public function meetings()
                             {
                                 return $this->morphMany(meetings::class, 'meetingable');
                             }
                             public function tasks()
                                 {
                                     return $this->morphMany(tasks::class, 'taskable');
                                 }
                                 public function contacts()
                                     {
                                         return $this->hasMany(contacts::class, 'account_id','id');
                                     }
}
