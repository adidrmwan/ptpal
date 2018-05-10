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
    return view('home');
});

Auth::routes();

//Route::get('/home', 'HomeController@index')->name('home');
Route::get('/divisi', 'InspeksiController@index');
Route::get('/sop', 'InspeksiController@sop');
Route::get('/apd', 'InspeksiController@apd');
Route::get('/inspeksi', 'InspeksiController@inspeksi');
Route::get('/bulan', 'InspeksiController@bulan');
Route::get('/notifikasi', 'InspeksiController@notifikasi');
Route::get('/report', 'InspeksiController@report');
Route::get('/checklist', 'ChecklistController@index');
Route::get('/crane', 'ChecklistController@crane');
Route::get('/forklift', 'ChecklistController@forklift');
