<?php

namespace App\Http\Controllers;
use Illuminate\Support\Facades\DB;
use App\Http\Controllers\Controller;
use Illuminate\Http\Request;

class MaintenanceController extends Controller
{
    public function reportinspeksi()
    {
    	$report = DB::table('inspeksi')
    		->join('users','users.id', '=', 'inspeksi.id_user')
    		->join('mesin','mesin.kode_mesin', '=', 'inspeksi.kode_mesin')
    		->select('inspeksi.id', 'inspeksi.tipe_crane','users.name', 'mesin.nama_mesin')
    		->get();
        return view('maintenance.reportinspeksi', ['report' => $report]);
    }

}
