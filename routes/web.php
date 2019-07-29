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


Route::resource('/poli','poliController');
Route::resource('/dokter','dokterController');
Route::resource('/pasien','pasienController');
Route::resource('/rekammedis','medisController');
Route::resource('/jadwal','jadwalController');
Route::resource('/periksa','periksaController');
Route::resource('/obat','obatController');
Route::resource('/beranda','berandaController');
Route::resource('/pengobatan','pengobatanController');


//CRUD
Route::resource('user', 'UserController');
Auth::routes();

Route::get('/home', 'HomeController@index')->name('home');
