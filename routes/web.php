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
})->name('homescreen');

Auth::routes();

Route::get('/home', 'HomeController@index')->name('home');
Route::get('/Pengaturan/profile', 'ProfileController@index')->name('profil');
Route::post('/Pengaturan/profile/tambah_profile', 'ProfileController@tambah_profile')->name('tambah_profil');
Route::get('/Pengaturan/profile/edit/{id}', 'ProfileController@edit_profile')->name('edit_profil');
Route::post('/Pengaturan/profile/update/{id}', 'ProfileController@update_profile')->name('update_profil');
Route::get('/Pengaturan/profile/delete/{id}', 'ProfileController@delete_profile')->name('delete_profil');


Route::get('/pengguna', 'Pengguna@semua_pengguna')->name('semua_pengguna');
Route::post('/pengguna/tambah', 'Pengguna@tambah_pengguna')->name('tambah_pengguna');
Route::post('/pengguna/update/{id}', 'Pengguna@update_pengguna')->name('update_pengguna');
Route::get('/pengguna/data_lengkap/{id}', 'Pengguna@data_lengkap')->name('data_lengkap');
Route::get('/pengguna/delete/{id}', 'Pengguna@delete_pengguna')->name('delete_pengguna');
Route::get('/pengguna/data_induk', 'DataIndukController@data_induk_index')->name('data_induk');
Route::post('/pengguna/data_induk/tambah', 'DataIndukController@tambah')->name('tambah_data_induk');
Route::post('/pengguna//data_induk/update/{id}', 'DataIndukController@update')->name('update_data_induk');
Route::get('/pengguna//data_induk/delete/{id}', 'DataIndukController@delete')->name('delete_data_induk');
Route::get('GetSubCatAgainstMainCatEdit/{id}', 'Pengguna@GetSubCatAgainstMainCatEdit')->name('provinsi');

Route::get('/lupasandi', 'LupaPassword@lupa')->name('lupapassword');
Route::get('/ganti-sandi', 'Keamanan\GantiPassword@index')->name('ganti_sandi_index');
Route::post('/ganti-sandi', 'Keamanan\GantiPassword@store')->name('ganti.sandi');

Route::get('/laporan', 'LaporanController@index')->name('semua_laporan');
Route::post('/laporan/tambah','LaporanController@tambah')->name('tambah_laporan');
Route::get('/laporan/delete/{id}','LaporanController@delete')->name('delete_laporan');
Route::post('/laporan/edit/{id}','LaporanController@edit')->name('edit_laporan');
Route::get('/laporan/download/{jenis_file}/{nagari}/{jorong}/{file}','LaporanController@download')->name('download_laporan');


Route::get('/laporan/lkg','K1Controller@index')->name('lkg');
Route::post('/laporan/lkg/tambah_k1','K1Controller@tambah')->name('tambahk1');
Route::post('/laporan/lkg/ubah_k1/{id}','K1Controller@ubah')->name('ubahk1');
Route::get('/laporan/lkg/hapus_k1/{id}','K1Controller@hapus')->name('hapusk1');
Route::post('/laporan/lkg/tambah_k4','K4Controller@tambah')->name('tambahk4');
Route::post('/laporan/lkg/ubah_k4/{id}','K4Controller@ubah')->name('ubahk4');
Route::get('/laporan/lkg/hapus_k4/{id}','K4Controller@hapus')->name('hapusk4');