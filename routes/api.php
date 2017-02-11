<?php

use Illuminate\Http\Request;

/*
|--------------------------------------------------------------------------
| API Routes
|--------------------------------------------------------------------------
|
| Here is where you can register API routes for your application. These
| routes are loaded by the RouteServiceProvider within a group which
| is assigned the "api" middleware group. Enjoy building your API!
|
*/

Route::get('/user', function (Request $request) {
    return $request->user();
})->middleware('auth:api');

Route::post('/loginmahasiswa', 'LoginSiatController@loginMahasiswa');
Route::post('/logindosen', 'LoginSiatController@loginDosen');

Route::get('/dosen/{domisili}/domisili','DosenController@getDosenByDomisili');
Route::get('/dosen/{kdprodi}/prodi','DosenController@getDosenByProdi');
Route::get('/prodi','DosenController@getProdi');
Route::resource('/dosen','DosenController');

Route::get('lokasi','UpdateLokasiController@getActiveLokasiDosen');
Route::post('lokasi','UpdateLokasiController@postUpdateLokasi');

Route::get('/absensi','AbsensiController@getAbsensi');
Route::get('/mahasiswa/{nim}','KrsController@getMahasiswa');

Route::get('/jadwal/{nim}','JadwalController@getJadwal');

Route::get('dump','DumpController@storeAllData');

Route::get('/krs/{tahun}/{semester}/{nim}/all','KrsController@getKrs')->name('api.krs');
Route::get("/statuskrs/{tahun}/{semester}/{nim}/{idamkul}","ApiKrsController@getStatusKrs");
Route::get("/carikrs/{tahun}/{semester}/{nim}","ApiKrsController@getAllKrs");

Route::group(['prefix'=>'demo'], function (){
    Route::get('krs','ApiKrsController@getKrs');
    Route::get('bimbingan/{nidn}','ApiKrsController@getMahasiswaBimbingan');
    Route::get('kontrak/{nidn}','ApiKrsController@getMahasiswaKontrak');
    Route::get('kontrak/{nim}/{tahun}/{semester}','ApiKrsController@getMataKuliahKontrak');
});
