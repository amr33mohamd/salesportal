<?php

namespace App\Models;

use Illuminate\Contracts\Auth\MustVerifyEmail;
use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Foundation\Auth\User as Authenticatable;
use Illuminate\Notifications\Notifiable;
use Laravel\Passport\HasApiTokens;
use Illuminate\Support\Facades\Hash;
use Laravel\Cashier\Billable;
use Spatie\Permission\Traits\HasRoles;

class User extends Authenticatable
{
    use HasFactory, Notifiable;
    use Billable;
    use HasRoles;

    /**
     * The attributes that are mass assignable.
     *
     * @var array
     */
    protected $guarded = [
        'id',
    ];
    public function setPasswordAttribute($value) {
      $this->attributes['password'] = empty($value)
    ? $this->password
    : Hash::make($value);



    }
    /**
     * The attributes that should be hidden for arrays.
     *
     * @var array
     */
    protected $hidden = [
        'password',
        'remember_token',
    ];

    /**
     * The attributes that should be cast to native types.
     *
     * @var array
     */
    protected $casts = [
        'email_verified_at' => 'datetime',
    ];

    //invited by
    public function invited_by()
    {
       return $this->hasOne(User::class,'invited_by','id');
     }
     public function followers()
     {
        return $this->hasMany(User::class,'follow_id','id');
      }
      public function groups()
      {
         return $this->hasMany(AttachmentsGroup::class,'user_id','id');
       }
       public function items()
       {
          return $this->hasMany(items::class,'user_id','id');
        }
        public function CommissionPrograms(){
          return $this->hasMany(CommissionProgram::class,'user_id');
        }

    public function contacts()
    {
        return $this->hasManyThrough(
            contacts::class, accounts::class,
            'user_id', 'account_id', 'id'
        );
    }
    public function cases()
    {
        return $this->hasManyThrough(
            opportunities::class, accounts::class,
            'user_id', 'account_id', 'id'
        );
    }
      public function leads()
      {
         return $this->hasMany(leads::class,'user_id','id');
       }
       public function accounts()
       {
          return $this->hasMany(accounts::class,'user_id','id');
        }
        public function calls()
        {
           return $this->hasMany(calls::class,'user_id','id');
         }
         public function tasks()
         {
            return $this->hasMany(tasks::class,'user_id','id');
          }
          public function meetings()
          {
             return $this->hasMany(meetings::class,'user_id','id');
           }
           public function documents()
           {
              return $this->hasMany(documents::class,'user_id','id');
            }
            public function commissions()
            {
               return $this->hasMany(Commission::class,'user_id','id');
             }
             public function payments()
             {
                return $this->hasMany(Payments::class,'user_id','id');
              }
              public function milestones()
              {
                 return $this->hasMany(Milestones::class,'user_id','id');
               }
               public function employees()
               {
                  return $this->hasMany(User::class,'follow_id','id')->with('employees');
                }


}
