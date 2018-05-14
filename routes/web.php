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

//------------------------User's login-------------------------
Auth::routes();

Route::get('/home', 'HomeController@index')->name('home');
//-------------------------Manager's login & register-------------------------
Route::prefix('manager')->group(function() {
    Route::get('/login', 'Auth\ManagerLoginController@showLoginForm')->name('manager.login');
    Route::post('/login', 'Auth\ManagerLoginController@login')->name('manager.login.submit');
    Route::post('/logout', 'Auth\ManagerLoginController@logout')->name('manager.logout');
    Route::get('/register', 'Auth\ManagerRegisterController@showRegisterForm')->name('manager.register');
    Route::post('/register', 'Auth\ManagerRegisterController@register')->name('manager.register.submit');
    Route::get('/', 'ManagerController@index')->name('manager.dashboard');
});

//-------------------------Petugas login & register -------------------------
Route::prefix('petugas')->group(function() {
    Route::get('/login', 'Auth\PetugasLoginController@showLoginForm')->name('petugas.login');
    Route::post('/login', 'Auth\PetugasLoginController@login')->name('petugas.login.submit');
    Route::post('/logout', 'Auth\PetugasLoginController@logout')->name('petugas.logout');
    Route::get('/register', 'Auth\PetugasRegisterController@showRegisterForm')->name('petugas.register');
    Route::post('/register', 'Auth\PetugasRegisterController@register')->name('petugas.register.submit');
    Route::get('/', 'PetugasController@index')->name('petugas.dashboard');
});

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

// ------------------Inspeksi-------------------
Route::get('/goliath', 'InspeksiController@goliath');
Route::get('/llc', 'InspeksiController@llc');
Route::get('/ph', 'InspeksiController@ph');
Route::get('/overhead', 'InspeksiController@overhead');

// ----------------maintenance------------------------
Route::get('/report_inspeksi', 'MaintenanceController@reportinspeksi');