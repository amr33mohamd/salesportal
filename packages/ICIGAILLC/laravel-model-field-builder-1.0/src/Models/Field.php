<?php

namespace ICIGAILLC\LaravelModelFieldBuilder\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class Field extends Model
{
    use HasFactory;
    protected $casts= [
        "extra"=> "array",
    ];
    protected $appends=["validation_string"];
    protected $with=["rules"];

    public function records(){
        return $this->hasMany(FieldRecord::class);
    }

    public function rules(){
        return $this->hasMany(FieldRule::class);
    }

    public function getValidationStringAttribute()
    {
        $arr= [];

        foreach ($this->rules as $rule) {
            $str = '';
            if($rule->value)
            {
                $str = $rule->rule.":".$rule->value ;

                if($rule->extra)
                {
                    $str .= ",".$rule->extra;
                }
                $arr[]= $str;

            }

            else{
                $arr[]= $rule->rule;
            }
        }

        return implode("|",$arr);
    }


    public static function findByName($name)
    {
        return static::where('name', $name)->first();
    }
    public static function findAllByName($names)
    {
        return static::whereIn('name', $names)->get();
    }
    public function setExtraAttribute($value)
    {
        if ($value) $this->attributes['extra'] = json_encode($value);
    }
}
