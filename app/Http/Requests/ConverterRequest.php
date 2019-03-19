<?php

namespace App\Http\Requests;

use Illuminate\Foundation\Http\FormRequest;

class ConverterRequest extends FormRequest
{
    /**
     * Определить, авторизован ли пользователь
     *
     * @return bool
     */
    public function authorize()
    {
        return true;
    }

    /**
     * Получить правила валидации, применимые к запросу
     *
     * @return array
     */
    public function rules()
    {
        return [
            'binaryNumber' => 'required|string|binary_number',
        ];
    }

    public function messages()
    {
        return [
            'binaryNumber.required' => 'Необходимо ввести двоичное',
            'binaryNumber.numeric' => 'Двоичное число должно содержать только цифры 0 и 1',
        ];
    }
}
