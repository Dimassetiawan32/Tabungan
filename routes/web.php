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

Auth::routes();

Route::get('/home', 'HomeController@index')->name('home');

Route::group(['prefix' => 'dashboard'], function(){
    Route::get('index', 'DashboardController@index')->name('home.index');
    Route::get('create', 'DashboardController@create')->name('home.create');
});

Route::group(['prefix' => 'kelas'], function(){
    Route::get('index', 'KelasController@index')->name('kelas.index');
    Route::get('create', 'KelasController@create')->name('kelas.create');
});

Route::group(['prefix' => 'nasabah'], function(){
    Route::get('index', 'NasabahController@index')->name('nasabah.index');
});

Route::group(['prefix' => 'transaksi'], function(){
    Route::get('index', 'TransaksiController@index')->name('transaksi.setor.index');
    Route::get('index2', 'TransaksiController@index2')->name('transaksi.penarikan.index');
});

