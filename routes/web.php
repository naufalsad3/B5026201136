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



Route::get('/pegawai','PegawaiController@index');
Route::get('/pegawai/tambah','PegawaiController@tambah');
Route::post('/pegawai/store','PegawaiController@store');
Route::get('/pegawai/edit/{id}','PegawaiController@edit');
Route::post('/pegawai/update','PegawaiController@update');
Route::get('/pegawai/hapus/{id}','PegawaiController@hapus');



Route::get('/tugas','TugasController@index');
Route::get('/tugas/tambah','TugasController@tambah');
Route::post('/tugas/store','TugasController@store');
Route::get('/tugas/edit/{id}','TugasController@edit');
Route::post('/tugas/update','TugasController@update');
Route::get('/tugas/hapus/{id}','TugasController@hapus');


Route::get('/absen','AbsenController@index');
Route::get('/absen/tambah','AbsenController@tambah');
Route::post('/absen/store','AbsenController@store');
Route::get('/absen/edit/{id}','AbsenController@edit');
Route::post('/absen/update','AbsenController@update');
Route::get('/absen/hapus/{id}','AbsenController@hapus');

Route::get('/lipstick','LipstickController@index');
Route::get('/lipstick/cari','LipstickController@cari');
Route::get('/lipstick/tambah','LipstickController@tambah');
Route::post('/lipstick/store','LipstickController@store');
Route::get('/lipstick/edit/{id}','LipstickController@edit');
Route::post('/lipstick/update','LipstickController@update');
Route::get('/lipstick/hapus/{id}','LipstickController@hapus');
Route::get('/lipstick/detail/{id}','LipstickController@view');
