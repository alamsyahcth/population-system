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

Route::view('/', 'welcome');
Auth::routes();

Route::get('/login/admin', 'Auth\LoginController@showAdminLoginForm');
Route::get('/login/penduduk', 'Auth\LoginController@showPendudukLoginForm');
Route::get('/register/admin', 'Auth\RegisterController@showAdminRegisterForm');
Route::get('/register/penduduk', 'Auth\RegisterController@showPendudukRegisterForm');

Route::post('/login/admin', 'Auth\LoginController@adminLogin');
Route::post('/login/penduduk', 'Auth\LoginController@pendudukLogin');
Route::post('/register/admin', 'Auth\RegisterController@createAdmin');
Route::post('/register/penduduk', 'Auth\RegisterController@createPenduduk');

Route::group(['middleware' => 'auth:penduduk'], function () {
    Auth::routes();
    Route::view('/penduduk', 'penduduk');
});

Route::group(['middleware' => 'auth:admin'], function () {
    Auth::routes();
    Route::get('/admin', 'DashboardAdminController@index');

    //Keluarga
    Route::get('/admin/keluarga','Admin\KeluargaController@index');
    Route::get('/admin/keluarga/view/{id}','Admin\KeluargaController@view');
    Route::post('/admin/keluarga/store','Admin\KeluargaController@store');
    Route::get('/admin/keluarga/edit/{id}','Admin\KeluargaController@edit');
    Route::post('/admin/keluarga/update/{id}','Admin\KeluargaController@update');
    Route::get('/admin/keluarga/destroy/{id}','Admin\KeluargaController@destroy');
    
    //Keperluan
    Route::get('/admin/keperluan','Admin\KeperluanController@index');
    Route::post('/admin/keperluan/store','Admin\KeperluanController@store');
    Route::get('/admin/keperluan/edit/{id}','Admin\KeperluanController@edit');
    Route::post('/admin/keperluan/update/{id}','Admin\KeperluanController@update');
    Route::get('/admin/keperluan/destroy/{id}','Admin\KeperluanController@destroy');

    //Alsan
    Route::get('/admin/alasan','Admin\AlasanController@index');
    Route::post('/admin/alasan/store','Admin\AlasanController@store');
    Route::get('/admin/alasan/edit/{id}','Admin\AlasanController@edit');
    Route::post('/admin/alasan/update/{id}','Admin\AlasanController@update');
    Route::get('/admin/alasan/destroy/{id}','Admin\AlasanController@destroy');

    //Kategori Aspirasi
    Route::get('/admin/kategori-aspirasi','Admin\KategoriAspirasiController@index');
    Route::post('/admin/kategori-aspirasi/store','Admin\KategoriAspirasiController@store');
    Route::get('/admin/kategori-aspirasi/edit/{id}','Admin\KategoriAspirasiController@edit');
    Route::post('/admin/kategori-aspirasi/update/{id}','Admin\KategoriAspirasiController@update');
    Route::get('/admin/kategori-aspirasi/destroy/{id}','Admin\KategoriAspirasiController@destroy');

    //Pengumuman
    Route::get('/admin/pengumuman','Admin\PengumumanController@index');
    Route::get('/admin/pengumuman/create','Admin\PengumumanController@create');
    Route::post('/admin/pengumuman/store','Admin\PengumumanController@store');
    Route::get('/admin/pengumuman/edit/{id}','Admin\PengumumanController@edit');
    Route::post('/admin/pengumuman/update/{id}','Admin\PengumumanController@update');
    Route::get('/admin/pengumuman/destroy/{id}','Admin\PengumumanController@destroy');
});
