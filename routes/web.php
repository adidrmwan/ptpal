<?php

Route::get('/', function () {
    return view('home');
});

//------------------------User's login-------------------------
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
Route::group(['prefix' => 'petugas', 'middleware' => ['auth', 'role:petugas_checklist']], function(){
    Route::get('/', 'InspeksiController@sop')->name('petugas.home');
    Route::post('/a', 'InspeksiController@apdsubmit')->name('petugas.apd.submit');
    Route::get('/crane', 'ChecklistController@crane')->name('petugas.checklist.crane');
    Route::get('/crane/goliath', 'InspeksiController@showCraneGoliath')->name('crane.goliath');
    Route::post('/crane/goliath', 'InspeksiController@submitCraneGoliath')->name('crane.goliath.submit');
    Route::get('/crane/goliath/{id}', 'InspeksiController@viewCraneGoliath')->name('crane.goliath.view');
    Route::get('/crane/goliath/download', 'InspeksiController@downloadCraneGoliath')->name('download.crane.goliath');
    Route::get('/crane/llc', 'InspeksiController@showCraneLLC')->name('crane.llc');
    Route::post('/crane/llc', 'InspeksiController@submitCraneLLC')->name('crane.llc.submit');
    Route::get('/crane/ph', 'InspeksiController@showCranePH')->name('crane.ph');
    Route::post('/crane/ph', 'InspeksiController@submitCranePH')->name('crane.ph.submit');
    Route::get('/crane/overhead', 'InspeksiController@showCraneOverhead')->name('crane.overhead');
    Route::post('/crane/overhead', 'InspeksiController@submitCraneOverhead')->name('crane.overhead.submit');
    Route::get('/generate-pdf-goliath/{id}', 'PdfGenerateController@pdfviewGoliath')->name('generate-pdf.goliath');
    Route::get('/view/pdf', 'PdfGenerateController@viewPDF');
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
Route::get('/llc', 'InspeksiController@llc');
Route::get('/ph', 'InspeksiController@ph');
Route::get('/overhead', 'InspeksiController@overhead');

// ----------------maintenance------------------------
Route::get('/report_inspeksi', 'MaintenanceController@reportinspeksi');