@extends('layouts.app')

@section('content')
    <div class="row">
    <div class="col col-md-10 offset-md-1 col-lg-8 offset-lg-2 col-xl-6 offset-xl-3">
        <ul class="list-group">
            <li class="list-group-item font-weight-bold">О программе</li>
            <li class="list-group-item">
                <p>
                    <b>Система счисления</b> (англ. numeral system) - символический
                    метод записи чисел, представление чисел с помощью письменных знаков.
                </p>
                <p>
                    Данная программа выполняет преобразование целых чисел, представленных
                    в двоичной системе счисления в десятеричное представление.
                </p>
                <a href="/"><button type="button" class="btn btn-secondary">Перейти к конвертеру</button></a>
            </li>
            <li class="list-group-item text-center">
                    &copy; 2019 ГБПОУ Республики Марий Эл &laquo;ОМК им. И.К. Глушкова&raquo;
            </li>
        </ul>
    </div>
</div>
@endsection
