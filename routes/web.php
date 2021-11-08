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

Route::get('/', function () {
    return view('welcome');
});

Route::get('praktikum1', function () {
    return view('prak1web');
});

Route::get('tugas4', function () {
    return view('tgs4');
});

Route::get('praktikum2', 'ViewController@showPraktikum2');

Route::get('ets', 'ViewController@showEts');

Route::get('tugas', 'ViewController@showTugas');

Route::post('php', 'ViewController@showPhp');