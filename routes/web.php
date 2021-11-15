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

Route::get('prak1', function () {
    return view('prak1pweb');
});

Route::get('tgs4', function () {
    return view('tgs4pweb');
});

Route::get('prak2', 'ViewController@showprak2pweb');

Route::get('ets', 'ViewController@showetspweb');

Route::get('php', 'ViewController@showphppweb');

Route::post('tgsphp', 'ViewController@showtgsphppweb');