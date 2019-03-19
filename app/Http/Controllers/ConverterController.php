<?php

namespace App\Http\Controllers;

use Converter;
use App\Http\Requests\ConverterRequest;

class ConverterController extends Controller
{
    /**
     * Точка входа в приложение
     *
     * @return View представление
     */
    public function index()
    {
        return view('index');
    }

    /**
     * О программе
     *
     * @return View представление
     */
    public function about()
    {
        return view('about');
    }

    /**
     * Обработка данных
     *
     * @param ConverterRequest $request экзкмпляр текущего HTTP-запроса
     *
     * @return View представление
     */
    public function convert(ConverterRequest $request)
    {
        $binaryNumber = $request->binaryNumber;
        $result = Converter::convert2to10($binaryNumber);

        return view('index', [
            'result' => $result,
            'binaryNumber' => $binaryNumber,
        ]);
    }
}
