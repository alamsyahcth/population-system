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
// Route::get('/register/admin', 'Auth\RegisterController@showAdminRegisterForm');
Route::get('/register/penduduk', 'Auth\RegisterController@showPendudukRegisterForm');

Route::post('/login/admin', 'Auth\LoginController@adminLogin');
Route::post('/login/penduduk', 'Auth\LoginController@pendudukLogin');
// Route::post('/register/admin', 'Auth\RegisterController@createAdmin');
Route::post('/register/penduduk', 'Auth\RegisterController@createPenduduk');

Route::group(['middleware' => 'auth:penduduk'], function () {
    Auth::routes();
    Route::get('/penduduk/logout', function() {
        Session::flush();
        Auth::logout();
        return redirect('/login/penduduk');
    });
    Route::get('/penduduk', 'Penduduk\DashboardPendudukController@index');

    //Pelayanan
    Route::get('/penduduk/pelayanan','Penduduk\PelayananController@index');
    Route::post('/penduduk/pelayanan/add', 'Penduduk\PelayananController@add');
    Route::get('/penduduk/pelayanan/remove/{id}', 'Penduduk\PelayananController@remove');
    Route::get('/penduduk/pelayanan/remove-all', 'Penduduk\PelayananController@remove_all');
    Route::get('/penduduk/pelayanan/save', 'Penduduk\PelayananController@save');

    //Penduduk Masuk
    Route::get('/penduduk/penduduk-masuk','Penduduk\PendudukMasukController@index');
    Route::post('/penduduk/penduduk-masuk/penduduk-tetap','Penduduk\PendudukMasukController@create_penduduk_tetap');
    Route::post('/penduduk/penduduk-masuk/penduduk-sementara','Penduduk\PendudukMasukController@create_penduduk_sementara');

    //Penduduk Keluar
    Route::get('/penduduk/penduduk-keluar','Penduduk\PendudukKeluarController@index');
    Route::post('/penduduk/penduduk-keluar/create','Penduduk\PendudukKeluarController@create');

    //Kelahiran
    Route::get('/penduduk/kelahiran-penduduk','Penduduk\KelahiranPendudukController@index');
    Route::post('/penduduk/kelahiran-penduduk/penduduk-tetap','Penduduk\KelahiranPendudukController@create_penduduk_tetap');
    Route::post('/penduduk/kelahiran-penduduk/penduduk-sementara','Penduduk\KelahiranPendudukController@create_penduduk_sementara');

    //Kematian
    Route::get('/penduduk/kematian-penduduk','Penduduk\KematianPendudukController@index');
    Route::post('/penduduk/kematian-penduduk/create','Penduduk\KematianPendudukController@create');

    //Aspirasi
    Route::get('/penduduk/aspirasi','Penduduk\AspirasiController@index');
    Route::post('/penduduk/aspirasi/store','Penduduk\AspirasiController@store');

    //Edit Data
    Route::get('/penduduk/edit-data','Penduduk\TempPendudukController@index');
    Route::post('/penduduk/edit-data/store','Penduduk\TempPendudukController@store');
});

Route::group(['middleware' => 'auth:admin'], function () {
    Auth::routes();
    Route::get('/admin', 'DashboardAdminController@index');

    //Pelayanan
    Route::get('/admin/pelayanan','Admin\PelayananController@index');
    Route::get('/admin/pelayanan/{id}','Admin\PelayananController@show');
    Route::get('/admin/pelayanan/terima/{id}','Admin\PelayananController@terima');
    Route::get('/admin/pelayanan/tolak/{id}','Admin\PelayananController@tolak');
    Route::get('/admin/pelayanan/cetak/{id}','Admin\PelayananController@cetak');

    //Penduduk
    Route::get('/admin/penduduk','Admin\PendudukController@index');

    //Penduduk Masuk
    Route::get('/admin/penduduk-masuk','Admin\PendudukMasukController@index');
    Route::get('/admin/penduduk-masuk/{id}', 'Admin\PendudukMasukController@show_data_penduduk');
    Route::get('/admin/penduduk-masuk/terima/{id}', 'Admin\PendudukMasukController@terima');
    Route::get('/admin/penduduk-masuk/tolak/{id}', 'Admin\PendudukMasukController@tolak');
    Route::get('/admin/penduduk-masuk/print/{id}', 'Admin\PendudukMasukController@print');

    //Penduduk Keluar
    Route::get('/admin/penduduk-keluar','Admin\PendudukKeluarController@index');
    Route::get('/admin/penduduk-keluar/{id}','Admin\PendudukKeluarController@show');
    Route::get('/admin/penduduk-keluar/terima/{id}','Admin\PendudukKeluarController@terima');
    Route::get('/admin/penduduk-keluar/tolak/{id}','Admin\PendudukKeluarController@tolak');
    Route::get('/admin/penduduk-keluar/cetak/{id}','Admin\PendudukKeluarController@cetak');

    //Kelahiran Penduduk
    Route::get('/admin/kelahiran-penduduk','Admin\KelahiranPendudukController@index');
    Route::get('/admin/kelahiran-penduduk/{id}', 'Admin\KelahiranPendudukController@show_data_penduduk');
    Route::get('/admin/kelahiran-penduduk/terima/{id}', 'Admin\KelahiranPendudukController@terima');
    Route::get('/admin/kelahiran-penduduk/tolak/{id}', 'Admin\KelahiranPendudukController@tolak');
    Route::get('/admin/kelahiran-penduduk/print/{id}', 'Admin\KelahiranPendudukController@print');

    //Kematian Penduduk
    Route::get('/admin/kematian-penduduk','Admin\KematianPendudukController@index');
    Route::get('/admin/kematian-penduduk/{id}','Admin\KematianPendudukController@show');
    Route::get('/admin/kematian-penduduk/terima/{id}','Admin\KematianPendudukController@terima');
    Route::get('/admin/kematian-penduduk/tolak/{id}','Admin\KematianPendudukController@tolak');
    Route::get('/admin/kematian-penduduk/cetak/{id}','Admin\KematianPendudukController@cetak');

    //Perubahan Data
    Route::get('/admin/edit-data','Admin\TempPendudukController@index');
    Route::get('/admin/edit-data/{id}','Admin\TempPendudukController@show');
    Route::get('/admin/edit-data/terima/{id}','Admin\TempPendudukController@terima');
    Route::get('/admin/edit-data/tolak/{id}','Admin\TempPendudukController@tolak');

    //Aspirasi
    Route::get('/admin/aspirasi','Admin\AspirasiController@index');
    Route::post('/admin/aspirasi/reply','Admin\AspirasiController@reply');
    Route::get('/admin/aspirasi/tolak/{id}','Admin\AspirasiController@tolak');

    //PendudukTetap
    Route::get('/admin/penduduk-tetap','Admin\PendudukTetapController@index');
    Route::get('/admin/penduduk-tetap/edit/{id}','Admin\PendudukTetapController@edit');
    Route::post('/admin/penduduk-tetap/update/{id}','Admin\PendudukTetapController@update');

    //PendudukSementara
    Route::get('/admin/penduduk-sementara','Admin\PendudukSementaraController@index');
    Route::get('/admin/penduduk-sementara/edit/{id}','Admin\PendudukSementaraController@edit');
    Route::post('/admin/penduduk-sementara/update/{id}','Admin\PendudukSementaraController@update');

    //Admin
    Route::get('/admin/administrator','Admin\AdministratorController@index');
    Route::get('/admin/administrator/view/{id}','Admin\AdministratorController@view');
    Route::post('/admin/administrator/store','Admin\AdministratorController@store');
    Route::get('/admin/administrator/edit/{id}','Admin\AdministratorController@edit');
    Route::post('/admin/administrator/update/{id}','Admin\AdministratorController@update');
    Route::get('/admin/administrator/destroy/{id}','Admin\AdministratorController@destroy');

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

    //laporan
    Route::get('admin/laporan-pelayanan','Admin\LaporanController@laporan_pelayanan');
    Route::get('admin/laporan-penduduk-masuk','Admin\LaporanController@laporan_penduduk_masuk');
    Route::get('admin/laporan-penduduk-keluar','Admin\LaporanController@laporan_penduduk_keluar');
    Route::get('admin/laporan-kelahiran-penduduk','Admin\LaporanController@laporan_kelahiran_penduduk');
    Route::get('admin/laporan-kematian-penduduk','Admin\LaporanController@laporan_kematian_penduduk');
    Route::get('admin/laporan-data-aspirasi','Admin\LaporanController@laporan_data_aspirasi');
    Route::post('admin/laporan/get-laporan','Admin\LaporanController@get_laporan');
});
