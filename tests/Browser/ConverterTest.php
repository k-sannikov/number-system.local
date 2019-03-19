<?php

namespace Tests\Browser;

use Tests\DuskTestCase;
use Laravel\Dusk\Browser;
use Illuminate\Foundation\Testing\DatabaseMigrations;

class ConverterTest extends DuskTestCase
{
    /**
     * Тестирование открытия приложения
     *
     * @return void
     */
    public function testOpenApplication()
    {
        $this->browse(function (Browser $browser) {
            $browser->visit('/')
                ->assertTitle('Системы счисления')
                ->assertSee('Системы счисления')
                ->assertEnabled('binaryNumber')
                ->assertSee('Преобразовать');
        });
    }

    /**
     * Тестирование открытия старницы "О программе"
     *
     * @return void
     */
    public function testOpenAbout()
    {
        $this->browse(function (Browser $browser) {
            $browser->visit('/about')
                ->assertTitle('Системы счисления')
                ->assertSee('Системы счисления')
                ->assertSee('О программе')
                ->assertSee('Система счисления')
                ->assertSee('Перейти к конвертеру')
                ->assertSee('© 2019 ГБПОУ Республики Марий Эл «ОМК им. И.К. Глушкова»');
        });
    }

    /**
     * Тестирование операции конвертирования
     *
     * @return void
     */
    public function testPerformConvert2to10()
    {
        $this->browse(function (Browser $browser) {
            $browser->visit('/')
                ->type('binaryNumber', '111')
                ->press('convert2to10')
                ->assertSee('Результат: 7');
        });
    }

    /**
     * Тестирование операции без ввода значений
     *
     * @return void
     */
    public function testPerformWithoutValues()
    {
        $this->browse(function (Browser $browser) {
            $browser->visit('/')
                ->press('convert2to10')
                ->assertSee('Ошибка! Необходимо ввести двоичное число');
        });
    }

    /**
     * Тестирование операции с невалидными значениями
     *
     * @return void
     */
    public function testInputNonNumericValues()
    {
        $this->browse(function (Browser $browser) {
            $browser->visit('/')
                ->type('binaryNumber', 'А')
                ->press('convert2to10')
                ->assertSee('Ошибка! Двоичное число должно содержать только цифры 0 и 1');
        });
    }
}
