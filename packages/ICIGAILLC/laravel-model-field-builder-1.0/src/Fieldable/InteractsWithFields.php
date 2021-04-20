<?php


namespace ICIGAILLC\LaravelModelFieldBuilder\Fieldable;


use ICIGAILLC\LaravelModelFieldBuilder\Models\Field;
use ICIGAILLC\LaravelModelFieldBuilder\Models\FieldRecord;
use Illuminate\Database\Eloquent\Relations\MorphMany;

trait InteractsWithFields
{
    protected static $fieldMorphName= "model";

    protected static function getTypeFromMorphName(){
        return static::$fieldMorphName."_type";
    }
    protected static function getIdFromMorphName(){
        return static::$fieldMorphName."_id";
    }
    protected static function getFieldMorphClass(){
        return static::class;
    }
}
