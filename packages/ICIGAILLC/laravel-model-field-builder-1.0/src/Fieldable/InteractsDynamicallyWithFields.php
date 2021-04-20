<?php


namespace ICIGAILLC\LaravelModelFieldBuilder\Fieldable;


use ICIGAILLC\LaravelModelFieldBuilder\Models\Field;
use ICIGAILLC\LaravelModelFieldBuilder\Models\FieldRecord;

trait InteractsDynamicallyWithFields
{
    use InteractsWithFields;

    public function fields()
    {
        return $this->morphMany(Field::class, static::$fieldMorphName);
    }
}
