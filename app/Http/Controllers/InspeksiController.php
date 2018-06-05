<?php

namespace App\Http\Controllers;

use Illuminate\Support\Facades\DB;
use App\Http\Controllers\Controller;
use Illuminate\Support\Facades\Validator;
use Illuminate\Http\Request;
use App\Inspeksi;
use App\CraneGoliath;
use App\CraneLLC;
use App\CraneOverhead;
use App\CranePH;
use Auth;
use PDF;
use Alert;

class InspeksiController extends Controller
{
    public function viewCraneGoliath($id)
    {
        $authuser = Auth::user();
        $crane = DB::table('inspeksi')
            ->join('users', 'users.id', '=', 'inspeksi.id_user')
            ->join('crane_goliath', 'crane_goliath.id_inspeksi', '=', 'inspeksi.id')
            ->join('mesin', 'inspeksi.kode_mesin', '=', 'mesin.kode_mesin')
            ->where('inspeksi.id', $id)
            ->select('users.name', 'users.divisi', 'crane_goliath.*', 'inspeksi.*', 'mesin.*')
            ->get();
        return view('inspeksi.view-goliath', ['crane' => $crane]);
    }

    public function viewCraneLLC($id)
    {
        $crane = DB::table('inspeksi')
            ->join('users', 'users.id', '=', 'inspeksi.id_user')
            ->join('crane_llc', 'crane_llc.id_inspeksi', '=', 'inspeksi.id')
            ->join('mesin', 'inspeksi.kode_mesin', '=', 'mesin.kode_mesin')
            ->where('inspeksi.id', $id)
            ->select('users.name', 'users.divisi', 'crane_llc.*', 'inspeksi.*', 'mesin.*')
            ->get();
        return view('inspeksi.view-llc', ['crane' => $crane]);
    }

    public function viewCranePH($id)
    {
        $authuser = Auth::user();
        $crane = DB::table('inspeksi')
            ->join('users', 'users.id', '=', 'inspeksi.id_user')
            ->join('crane_ph', 'crane_ph.id_inspeksi', '=', 'inspeksi.id')
            ->join('mesin', 'inspeksi.kode_mesin', '=', 'mesin.kode_mesin')
            ->where('inspeksi.id', $id)
            ->select('users.name', 'users.divisi', 'crane_ph.*', 'inspeksi.*', 'mesin.*')
            ->get();
        return view('inspeksi.view-ph', ['crane' => $crane]);
    }

    public function viewCraneOverhead($id)
    {
        $authuser = Auth::user();
        $crane = DB::table('inspeksi')
            ->join('users', 'users.id', '=', 'inspeksi.id_user')
            ->join('crane_overhead', 'crane_overhead.id_inspeksi', '=', 'inspeksi.id')
            ->join('mesin', 'inspeksi.kode_mesin', '=', 'mesin.kode_mesin')
            ->where('inspeksi.id', $id)
            ->select('users.name', 'users.divisi', 'crane_overhead.*', 'inspeksi.*', 'mesin.*')
            ->get();
        return view('inspeksi.view-overhead', ['crane' => $crane]);
    }
        
    public function apdsubmit(Request $request)
    {
        return redirect()->intended(route('petugas.checklist.crane'));
    }
    public function index()
    {
        return view('inspeksi.divisi');
    }

    public function sop()
    {
        return view('inspeksi.sop');
    }

    public function apd()
    {
        return view('inspeksi.apd');
    }

    public function inspeksi()
    {
        return view('inspeksi.inspeksi');
    }
    
    
    public function bulan()
    {
        return view('inspeksi.bulan');
    }

    public function notifikasi()
    {
        return view('inspeksi.notifikasi');
    }

    public function report()
    {
        return view('inspeksi.report');
    }

}
