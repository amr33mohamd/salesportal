<?php

namespace ICIGAILLC\LaravelModelFieldBuilder;

use Illuminate\Support\Facades\Facade;

/**
 * @see \Icigai\LaravelModelFieldBuilder\Skeleton\SkeletonClass
 */
class LaravelModelFieldBuilderFacade extends Facade
{
    /**
     * Get the registered name of the component.
     *
     * @return string
     */
    protected static function getFacadeAccessor()
    {
        return 'laravel-model-field-builder';
    }
}
