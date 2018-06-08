<?php
Auth::routes();
Route::get('/home', 'HomeController@home')->name('home');

Route::get('/', function () {
    
    if(Auth::check()) {    
        $user = Auth::user();
        $userrole = DB::table('role_user')
                    ->where('user_id', $user->id)
                    ->select('role_id')
                    ->first();
        if ( $userrole->role_id == '1' ) {
               return redirect()->route('report');
        }
        elseif ( $userrole->role_id == '2' ) {
               return redirect()->route('petugas.home');
        }      
    }

    return view('home');       
    
})->name('index');

//------------------------User's login-------------------------

// Route untuk user manager
Route::group(['prefix' => 'report', 'middleware' => ['auth', 'role:manager']], function(){
    Route::get('/inspeksi', 'MaintenanceController@reportinspeksi')->name('report');
    Route::get('/check/{id}', 'MaintenanceController@checkmaintenance')->name('check');
    Route::get('/history', 'MaintenanceController@reportmaintenance')->name('history');
    Route::get('/view/goliath/{id}', 'InspeksiController@viewCraneGoliath')->name('view.goliath');
    Route::get('/view/llc/{id}', 'InspeksiController@viewCraneLLC')->name('view.llc');
    Route::get('/view/ph/{id}', 'InspeksiController@viewCranePH')->name('view.ph');
    Route::get('/view/overhead/{id}', 'InspeksiController@viewCraneOverhead')->name('view.overhead');
    Route::post('/maintenance/goliath', 'MaintenanceController@submitGoliath')->name('maintenance.goliath.submit');
    Route::post('/maintenance/llc', 'MaintenanceController@submitLLC')->name('maintenance.llc.submit');
    Route::post('/maintenance/overhead', 'MaintenanceController@submitOverhead')->name('maintenance.overhead.submit');
    Route::post('/maintenance/ph', 'MaintenanceController@submitPH')->name('maintenance.ph.submit');

});

// Route untuk user petugas
Route::group(['prefix' => 'petugas', 'middleware' => ['auth', 'role:petugas_checklist']], function(){
    Route::get('/', 'InspeksiController@sop')->name('petugas.home');
    Route::post('/a', 'InspeksiController@apdsubmit')->name('petugas.apd.submit');
    Route::get('/crane', 'ChecklistController@crane')->name('petugas.checklist.crane');
    // goliath crane
    Route::get('/crane/goliath', 'ChecklistController@showCraneGoliath')->name('crane.goliath');
    Route::post('/crane/goliath', 'ChecklistController@submitCraneGoliath')->name('crane.goliath.submit');
    Route::get('/crane/goliath/{id}', 'ChecklistController@viewCraneGoliath')->name('crane.goliath.view');
    // llc crane
    Route::get('/crane/llc', 'ChecklistController@showCraneLLC')->name('crane.llc');
    Route::post('/crane/llc', 'ChecklistController@submitCraneLLC')->name('crane.llc.submit');
    Route::get('/crane/llc/{id}', 'ChecklistController@viewCraneLLC')->name('crane.llc.view');
    // ph crane
    Route::get('/crane/ph', 'ChecklistController@showCranePH')->name('crane.ph');
    Route::post('/crane/ph', 'ChecklistController@submitCranePH')->name('crane.ph.submit');
    Route::get('/crane/ph/{id}', 'ChecklistController@viewCranePH')->name('crane.ph.view');
    // overhead crane
    Route::get('/crane/overhead', 'ChecklistController@showCraneOverhead')->name('crane.overhead');
    Route::post('/crane/overhead', 'ChecklistController@submitCraneOverhead')->name('crane.overhead.submit');
    Route::get('/crane/overhead/{id}', 'ChecklistController@viewCraneOverhead')->name('crane.overhead.view');
    // download as pdf
    
});

Route::get('/generate-pdf-goliath/{id}', 'PdfGenerateController@pdfviewGoliath')->name('generate-pdf.goliath');
Route::get('/generate-pdf-llc/{id}', 'PdfGenerateController@pdfviewLLC')->name('generate-pdf.llc');
Route::get('/generate-pdf-ph/{id}', 'PdfGenerateController@pdfviewPH')->name('generate-pdf.ph');
Route::get('/generate-pdf-overhead/{id}', 'PdfGenerateController@pdfviewOverhead')->name('generate-pdf.overhead');

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