<?php

use Illuminate\Support\Facades\Route;

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

Route::get('/', 'PertanyaanController@index');
Route::get('pertanyaan', 'PertanyaanController@index');
Route::get('pertanyaan/create', 'PertanyaanController@create');
Route::post('pertanyaan', 'PertanyaanController@store');
Route::get('pertanyaan/{pertanyaan}', 'PertanyaanController@show');
Route::get('pertanyaan/{pertanyaan}/edit', 'PertanyaanController@edit');
Route::put('pertanyaan/{pertanyaan}', 'PertanyaanController@update');
Route::delete('pertanyaan/{pertanyaan}', 'PertanyaanController@delete');

Route::get('jawaban/{pertanyaan}', 'JawabanController@index');
Route::post('jawaban/{pertanyaan}', 'JawabanController@store');
