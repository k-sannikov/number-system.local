<?php

/*
|--------------------------------------------------------------------------
| Web Routes
|--------------------------------------------------------------------------
|
| Here is where you can register web routes for your application. These
| routes are loaded by the RouteServiceProvider within a group which
| contains the "web" middleware group. Now create something great!
|
*/
Route::get('/', 'ConverterController@index')->name('index');;
Route::get('/about', 'ConverterController@about')->name('about');;
Route::post('/', 'ConverterController@convert')->name('convert');
