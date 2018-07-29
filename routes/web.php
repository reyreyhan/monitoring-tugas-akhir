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
    return view('login');
});

Route::get('/pengajuan', 'PengajuanTAController@index');
Route::post('/pengajuan/store', 'PengajuanTAController@store');
Route::get('/pengajuan/update', 'PengajuanTAController@vupdate');
Route::put('/pengajuan/update', 'PengajuanTAController@update');
Route::put('/pengajuan/final', 'PengajuanTAController@final');

Route::get('/bimbingan2', 'BimbinganTAController@index');
Route::post('/bimbingan2/store', 'BimbinganTAController@store');


Route::get('/dosen', 'DosenController@index');
Route::get('/bimbinganmahasiswatppa/{nrp}','DosenController@detail');
Route::put('/bimbinganmahasiswatppa/{nrp}/{id}', 'DosenController@approve');

Route::get('/bimdosen', 'BimDosenTA@index');
Route::get('/bimbinganmahasiswa/{nrp}', 'BimDosenTA@detail');
Route::put('/bimbinganmahasiswa/{nrp}/{id}', 'BimDosenTA@approve');

Route::get('/ta', 'UploadTaController@index');
Route::post('/ta/store', 'UploadTaController@store');
Route::delete('/ta/delete/{nrp}/{kategori}/{jenis}/{id}','UploadTaController@delete');

Route::get('/tppa', 'UploadTPPAController@index');
Route::post('/tppa/store','UploadTPPAController@store');
Route::delete('/tppa/delete/{nrp}/{kategori}/{jenis}/{id}','UploadTPPAController@delete');


Route::get('/revtppa', 'UploadRevisiTPPAController@index');
Route::post('/revtppa/store','UploadRevisiTPPAController@store');
Route::delete('/revtppa/delete/{nrp}/{kategori}/{jenis}/{id}','UploadRevisiTPPAController@delete');

Route::get('/revta', 'UploadRevisiTA@index');
Route::post('/revta/store','UploadRevisiTA@store');
Route::delete('/revta/delete/{nrp}/{kategori}/{jenis}/{id}','UploadRevisiTA@delete');

Route::get('/bimbingantppa', 'BimbinganTPPAController@index');
Route::post('/bimbingantppa/store', 'BimbinganTPPAController@store');

Route::get('/admin','AdminController@index');
Route::post('/admin','AdminController@store');

Route::get('/koor', 'KoorController@index');
Route::put('/koor/approve/{nrp}','KoorController@approve');
Route::put('/koor/reject/{nrp}','KoorController@reject');
Route::get('/koor/tppa','KoorController@tppa');
Route::get('/koor/tppa/{nrp}','KoorController@dtppa');
Route::put('/koor/tppa/{id}','KoorController@tppaa');
Route::get('/koor/revtppa/','KoorController@revtppa');
Route::get('/koor/revtppa/{nrp}','KoorController@drevtppa');
Route::put('/koor/revtppa/{id}','KoorController@revtppaa');
Route::get('/koor/ta/','KoorController@ta');
Route::get('/koor/ta/{nrp}','KoorController@dta');
Route::put('/koor/ta/{id}','KoorController@taa');

Route::get('/koor/revta/','KoorController@revta');
Route::get('/koor/revta/{nrp}','KoorController@drevta');
Route::put('/koor/revta/{id}','KoorController@revtaa');

Route::get('/koor/deadline','SetDeadlineController@index');
Route::post('/koor/deadline','SetDeadlineController@update');

Route::get('/koor/pengumuman','PengumumanController@index');
Route::post('/koor/pengumuman','PengumumanController@store');

Route::get('/berkas1', function () {
    return view('koor/berkastppa');
});

Route::get('/berkas2', function () {
    return view('koor/berkasrevtppa');
});

Route::get('/berkas3', function () {
    return view('koor/berkasta');
});

Route::get('/berkas4', function () {
    return view('koor/berkasrevta');
});

Route::get('/berkasmahasiswa', function () {
    return view('koor/mahasiswa');
});

Route::post('/login/action','LoginController@action');
Route::get('/logout','LoginController@logout');
