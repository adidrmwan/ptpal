<?php

namespace App\Http\Controllers;
use Illuminate\Support\Facades\DB;
use App\Http\Controllers\Controller;
use Illuminate\Http\Request;
use App\Maintenance;
use Auth;
use PDF;
use Alert;

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


    public function checkmaintenance($id)
    {
        $crane = DB::table('inspeksi')
            ->join('users', 'users.id', '=', 'inspeksi.id_user')
            ->join('crane_goliath', 'crane_goliath.id_inspeksi', '=', 'inspeksi.id')
            ->join('mesin', 'inspeksi.kode_mesin', '=', 'mesin.kode_mesin')
            ->where('inspeksi.id', $id)
            ->select('users.name', 'users.divisi', 'crane_goliath.*', 'inspeksi.*', 'mesin.*')
            ->get();

        return view('maintenance.checkmaintenance', ['crane' => $crane]);
    }


    public function submit(Request $request)
    {
        $userid = Auth::user()->id;
        $craneid = $request->input('crane_id');
        $maintenance = new Maintenance();
        $maintenance->id_user = $userid;
        $maintenance->id_inspeksi = $craneid;
        $maintenance->problem_kat_A_1 = $request->input('problem_kat_A_1');
        $maintenance->problem_kat_A_2 = $request->input('problem_kat_A_2');
        $maintenance->problem_kat_A_3 = $request->input('problem_kat_A_3');
        $maintenance->problem_kat_B_1 = $request->input('problem_kat_B_1');
        $maintenance->problem_kat_B_2 = $request->input('problem_kat_B_2');
        $maintenance->problem_kat_B_3 = $request->input('problem_kat_B_3');
        $maintenance->tgl_mulai = $request->input('tgl_mulai');
        $maintenance->tgl_selesai = $request->input('tgl_selesai');
        $maintenance->laporan_pelaksanaan = $request->input('laporan_pelaksanaan');
        $maintenance->ket_material = $request->input('ket_material');

        $maintenance->save();
 
        return redirect()->intended(route('report'));
    }    

    public function reportmaintenance()
    {
        $report = DB::table('maintenance')
            ->join('users','users.id', '=', 'maintenance.id_user')
            ->join('inspeksi','inspeksi.id', '=', 'maintenance.id_inspeksi')
            ->join('mesin', 'mesin.kode_mesin', '=', 'inspeksi.kode_mesin')
            ->select('maintenance.id', 'maintenance.tgl_mulai','users.name', 'mesin.nama_mesin', 'inspeksi.tgl_inspeksi')
            ->get();

        return view('maintenance.reportmaintenance', ['report' => $report]);
    }

    public function viewmaintenance($id)
    {
        $hour = DB::table('maintenance')
            ->where('id', $id)
            ->select(DB::raw("SUM(time_to_sec(timediff(tgl_selesai, tgl_mulai)) / 3600) as result"))
            ->first();
        $waktutotal = intval($hour->result);
        $maintenance = DB::table('maintenance')
            ->join('inspeksi','inspeksi.id', '=', 'maintenance.id_inspeksi')
            ->join('users','users.id', '=', 'maintenance.id_user')
            ->join('mesin', 'mesin.kode_mesin', '=', 'inspeksi.kode_mesin')
            ->select('maintenance.*','users.name','users.divisi', 'mesin.*', 'inspeksi.tgl_inspeksi')
            ->where('maintenance.id', $id)
            ->get();
        
            // dd($maintenance);
        return view('maintenance.viewmaintenance', ['maintenance' => $maintenance, 'waktutotal' => $waktutotal]);
    }


}
