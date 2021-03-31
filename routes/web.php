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
    Route::post('save', 'DashboardController@store')->name('home.save');
    Route::get('formEdit/{dashboard}', 'DashboardController@edit')->name('home.formEdit');
    Route::patch('update/{dashboard}', 'DashboardController@update')->name('home.update');
    Route::delete('delete/{dashboard}', 'DashboardController@destroy')->name('home.delete');
});

Route::group(['prefix' => 'kelas'], function(){
    Route::get('index', 'KelasController@index')->name('kelas.index');
    Route::get('create', 'KelasController@create')->name('kelas.create');
    Route::post('save', 'KelasController@store')->name('kelas.save');
    Route::get('formEdit/{kelas}', 'KelasController@edit')->name('kelas.formEdit');
    Route::patch('update/{kelas}', 'KelasController@update')->name('kelas.update');
    Route::delete('delete/{kelas}', 'KelasController@destroy')->name('kelas.delete');
});

Route::group(['prefix' => 'nasabah'], function(){
    Route::get('index', 'NasabahController@index')->name('nasabah.index');
    Route::get('create', 'NasabahController@create')->name('nasabah.create');
    Route::post('save', 'NasabahController@store')->name('nasabah.save');
    Route::get('formEdit/{nasabah}', 'NasabahController@edit')->name('nasabah.formEdit');
    Route::patch('update/{nasabah}', 'NasabahController@update')->name('nasabah.update');
    Route::delete('delete/{nasabah}', 'NasabahController@destroy')->name('nasabah.delete');
});

Route::group(['prefix' => 'setor'], function(){
    Route::get('index', 'SetorController@index')->name('transaksi.setor.index');
    Route::get('formSetor', 'SetorController@create')->name('transaksi.setor.formSetor');
    Route::post('save', 'SetorController@store')->name('transaksi.setor.save');
    Route::get('formEdit/{setor}', 'SetorController@edit')->name('transaksi.setor.formEdit');
    Route::patch('update/{setor}', 'SetorController@update')->name('transaksi.setor.update');
    Route::delete('delete/{setor}', 'SetorController@destroy')->name('transaksi.setor.delete');
});

Route::group(['prefix' => 'tarik'], function(){
    Route::get('index', 'TarikController@index')->name('transaksi.penarikan.index');
    Route::get('formTarik', 'TarikController@create')->name('transaksi.penarikan.formTarik');
    Route::post('save', 'TarikController@store')->name('transaksi.penarikan.save');
    Route::get('formEdit/{tarik}', 'TarikController@edit')->name('transaksi.penarikan.formEdit');
    Route::patch('update/{tarik}', 'TarikController@update')->name('transaksi.penarikan.update');
    Route::delete('delete/{tarik}', 'TarikController@destroy')->name('transaksi.penarikan.delete');
});

