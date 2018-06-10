<?php

namespace App\Http\Controllers;

use App\Http\Requests;
use Illuminate\Http\Request;
use DB;
use PDF;
use App\Inspeksi;
use Auth;

class PdfGenerateController extends Controller
{
    public function pdfviewGoliath($id)
    {
        $users = DB::table('inspeksi')
            ->join('users', 'users.id', '=', 'inspeksi.id_user')
            ->join('crane_goliath', 'crane_goliath.id_inspeksi', '=', 'inspeksi.id')
            ->join('mesin', 'inspeksi.kode_mesin', '=', 'mesin.kode_mesin')
            ->where('inspeksi.id', $id)
            ->select('users.name', 'users.divisi', 'crane_goliath.*', 'inspeksi.*', 'mesin.*')
            ->get();
        // dd($users);
        PDF::setOptions(['dpi' => 150, 'defaultFont' => 'Roboto']);
        $pdf = PDF::loadView('pdf.pdf-goliath', compact('users'));
        return $pdf->download('print_goliath.pdf');
    }

    public function pdfviewLLC($id)
    {
        $users = DB::table('inspeksi')
            ->join('users', 'users.id', '=', 'inspeksi.id_user')
            ->join('crane_llc', 'crane_llc.id_inspeksi', '=', 'inspeksi.id')
            ->join('mesin', 'inspeksi.kode_mesin', '=', 'mesin.kode_mesin')
            ->where('inspeksi.id', $id)
            ->select('users.name', 'users.divisi', 'crane_llc.*', 'inspeksi.*', 'mesin.*')
            ->get();
        // dd($users);
        PDF::setOptions(['dpi' => 150, 'defaultFont' => 'Roboto']);
        $pdf = PDF::loadView('pdf.pdf-llc', compact('users'));
        return $pdf->download('print_llc.pdf');
    }

    public function pdfviewOverhead($id)
    {
        $users = DB::table('inspeksi')
            ->join('users', 'users.id', '=', 'inspeksi.id_user')
            ->join('crane_overhead', 'crane_overhead.id_inspeksi', '=', 'inspeksi.id')
            ->join('mesin', 'inspeksi.kode_mesin', '=', 'mesin.kode_mesin')
            ->where('inspeksi.id', $id)
            ->select('users.name', 'users.divisi', 'crane_overhead.*', 'inspeksi.*', 'mesin.*')
            ->get();
        // dd($users);
        PDF::setOptions(['dpi' => 150, 'defaultFont' => 'Roboto']);
        $pdf = PDF::loadView('pdf.pdf-overhead', compact('users'));
        return $pdf->download('print_overhead.pdf');
    }

    public function pdfviewPH($id)
    {
        $users = DB::table('inspeksi')
            ->join('users', 'users.id', '=', 'inspeksi.id_user')
            ->join('crane_ph', 'crane_ph.id_inspeksi', '=', 'inspeksi.id')
            ->join('mesin', 'inspeksi.kode_mesin', '=', 'mesin.kode_mesin')
            ->where('inspeksi.id', $id)
            ->select('users.name', 'users.divisi', 'crane_ph.*', 'inspeksi.*', 'mesin.*')
            ->get();
        // dd($users);
        PDF::setOptions(['dpi' => 150, 'defaultFont' => 'Roboto']);
        $pdf = PDF::loadView('pdf.pdf-ph', compact('users'));
        return $pdf->download('print_ph.pdf');
    }

    public function pdfviewMaintenance($id)
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

        PDF::setOptions(['dpi' => 150, 'defaultFont' => 'Roboto']);
        $pdf = PDF::loadView('pdf.pdf-maintenance', ['maintenance' => $maintenance, 'waktutotal' => $waktutotal]);
        return $pdf->download('maintenance.pdf');   
    }
}
