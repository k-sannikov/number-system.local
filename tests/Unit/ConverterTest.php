<?php

namespace Tests\Unit;

use Converter;
use Tests\TestCase;
use Illuminate\Foundation\Testing\WithFaker;
use Illuminate\Foundation\Testing\RefreshDatabase;

class ConverterTest extends TestCase
{
    /**
     * Тестирование метода convert2to10
     *
     * @param string $binaryNumber двоичное число
     * @param integer|double $expected ожидаемый результат
     *
     * @return void
     *
     * @dataProvider convert2to10Provider
     */
    public function testConvert2to10($binaryNumber, $expected)
    {
        $this->assertEquals($expected, Converter::convert2to10($binaryNumber));
    }

    public function convert2to10Provider()
    {
        return [
            'положительное' => ['111', 7],
            'ноль' => ['0', 0],
        ];
    }
}
