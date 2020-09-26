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
});
