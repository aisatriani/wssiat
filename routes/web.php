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

Route::get('/', 'HomeController@index');

Route::get('login','LoginAppController@index');
Route::post('login','LoginAppController@login');
Route::get('logout','LoginAppController@logout');

Route::post('dosen/{id}','ManageDosenController@postLocation')->name('dosen.location.update');
Route::resource('dosen','ManageDosenController');
Route::get('filterkrs',"DemoKrsController@filterKrs");
Route::get('krs','DemoKrsController@index');
route::post('krs','DemoKrsController@storeKrs');