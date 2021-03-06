<?php

/*
|--------------------------------------------------------------------------
| Web Routes
|--------------------------------------------------------------------------
|
| This file is where you may define all of the routes that are handled
| by your application. Just tell Laravel the URIs it should respond
| to using a Closure or controller method. Build something great!
|
*/

Route::get('/', function () {
    return view('home');
});

Route::post('dosen/{id}','ManageDosenController@postLocation')->name('dosen.location.update');
Route::resource('dosen','ManageDosenController');
Route::resource('krs','DemoKrsController@index');
Route::get('lokasidosen','UpdateLokasiController@index');
Route::delete('lokasidosen/{id}','UpdateLokasiController@destroy');