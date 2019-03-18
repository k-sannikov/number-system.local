<?php

namespace App\Services;

/**
 * Класс Конвертер
 */
class Converter
{
    /**
     * Перевод из двоичной сичтемы счисления в десятичную
     *
     * @param string число в двоичной системе счисления
     */
    public function convert2to10($binaryNumber)
    {
        /**
         * Результат вычисления
         *
         * @var integer|double
         */
        $result = 0;

        /**
         * Массив двоичных чисел
         *
         * @var array
         */
        $binaryNumberArray = str_split($binaryNumber);

        end($binaryNumberArray);
        /**
         * Последний ключ массива
         *
         * @var integer
         */
        $count = key($binaryNumberArray);

        foreach ($binaryNumberArray as $value) {
            $result += $value * (2 ** $count);
            $count--;
        }
        return $result;
    }
}
