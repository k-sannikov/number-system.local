<?php

namespace App\Providers;

use Illuminate\Support\ServiceProvider;
use Illuminate\Support\Facades\Validator;

class ValidationServiceProvider extends ServiceProvider
{
    /**
     * Bootstrap services.
     *
     * @return void
     */
    public function boot()
    {
        Validator::extend('binary_number', function ($attribute, $value, $parameters) {
            /**
            * Массив двоичных чисел
            *
            * @var array
            */
            $binaryNumberArray = str_split($value);

            foreach ($binaryNumberArray as $binaryNumber) {
                if ($binaryNumber != 0 || $binaryNumber != 0) {
                    return false;
                }
            }
            return true;
        });
    }
}
