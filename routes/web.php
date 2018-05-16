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

Route::get('/home', 'HomeController@index')->name('home');

// Route untuk user yang baru register
Route::group(['prefix' => 'home', 'middleware' => ['auth']], function(){
	Route::get('/', function(){
		return view('home');
	});

});

// Route untuk user manager
Route::group(['prefix' => 'manager', 'middleware' => ['auth', 'role:manager']], function(){
	Route::get('/', function(){
		return view('manager.home');
	});

});

// Route untuk user petugas
Route::group(['prefix' => 'petugas', 'middleware' => ['auth', 'role:petugas']], function(){
	Route::get('/', 'InspeksiController@sop')->name('petugas.home');
	Route::post('/a', 'InspeksiController@apdsubmit')->name('petugas.apd.submit');
	Route::get('/crane', 'ChecklistController@crane')->name('petugas.checklist.crane');
});

Route::get('/divisi', 'InspeksiController@index');

Route::get('/apd', 'InspeksiController@apd');
Route::get('/inspeksi', 'InspeksiController@inspeksi');
Route::get('/bulan', 'InspeksiController@bulan');
Route::get('/notifikasi', 'InspeksiController@notifikasi');
Route::get('/report', 'InspeksiController@report');

Route::get('/crane', 'ChecklistController@crane');
Route::get('/forklift', 'ChecklistController@forklift');

// ------------------Inspeksi-------------------
Route::get('/goliath', 'InspeksiController@goliath');