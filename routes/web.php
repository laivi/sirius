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

Route::get('/atendente', function () {
    return view('central/atendente');
});
Route::get('/home', function () {
    return view('home');
});

Route::get('/medico_fila', function () {
    return view('central/medico_fila');
});

Route::get('/ocorrencia/{key}/show', 'OcorrenciaController@show'); 