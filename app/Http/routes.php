<?php

/*
|--------------------------------------------------------------------------
| Application Routes
|--------------------------------------------------------------------------
|
| Here is where you can register all of the routes for an application.
| It's a breeze. Simply tell Laravel the URIs it should respond to
| and give it the controller to call when that URI is requested.
|
*/

// Route::get('/', function () {
//     return view('welcome');
// });
//menu
Route::get('/','LoginController@index')->name('index');
Route::get('dashboard','DashboardController@index')->name('dashboard');
Route::get('grafik','GrafikController@index')->name('grafik');
Route::get('cari','BeritaController@cari')->name('cari');
Route::get('post','BeritaController@post')->name('post');
Route::get('logout','LoginController@logout')->name('logout');

//proses
Route::post('login','LoginController@login');
Route::post('posting','BeritaController@posting')->name('posting');
Route::post('cari','BeritaController@cari')->name('caripost');



// Route::get('')
