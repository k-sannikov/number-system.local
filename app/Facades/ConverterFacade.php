<?php

namespace App\Facades;

use Illuminate\Support\Facades\Facade;

/**
 * Get the register name of thecomponent.
 *
 * @return string
 */
class ConverterFacade extends Facade
{
    protected static function getFacadeAccessor()
    {
        return 'Converter';
    }
}
