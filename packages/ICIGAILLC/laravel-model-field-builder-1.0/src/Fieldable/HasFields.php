<?php


namespace ICIGAILLC\LaravelModelFieldBuilder\Fieldable;

use ICIGAILLC\LaravelModelFieldBuilder\Models\Field;

interface HasFields
{
    public function fieldsData();
    public static function getFieldInstance(Field $field);


    public static function getTextFieldInstance();
    public static function getNumberFieldInstance();
    public static function getEmailFieldInstance();
    public static function getPasswordFieldInstance();

    public static function getSelectFieldInstance();
    public static function getRadioFieldInstance();
    public static function getCheckFieldInstance();
}
