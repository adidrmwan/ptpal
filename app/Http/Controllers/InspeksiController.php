<?php

namespace App\Http\Controllers;

use Illuminate\Support\Facades\DB;
use App\Http\Controllers\Controller;
use Illuminate\Http\Request;
use App\Inspeksi;
use App\CraneGoliath;
use Auth;

class InspeksiController extends Controller
{
    public function showCraneGoliath()
    {
        $mesin = DB::table('mesin')->get();
        // dd($mesin);
        return view('inspeksi.goliath', ['mesin' => $mesin]);
    }

    public function submitCraneGoliath(Request $request)
    {
        $userid = Auth::user()->id;
        $tipecrane = 'goliath';
        $inspeksi = new Inspeksi();
        $inspeksi->id_user = $userid;
        $inspeksi->tipe_crane = $tipecrane;

        $inspeksi->nama_mesin = $request->input('nama_mesin');
        $inspeksi->bengkel = $request->input('bengkel');
        $inspeksi->shift_hour = $request->input('shift_hour');
        $inspeksi->tgl_inspeksi = $request->input('tgl_inspeksi');
        $inspeksi->catatan = $request->input('catatan');

        $inspeksi->save();

        $crane = new CraneGoliath();
        $crane->id_inspeksi = $inspeksi->id;
        $crane->ket_1 = $request->input('ket_1');
        $crane->ket_2 = $request->input('ket_2');
        $crane->ket_3 = $request->input('ket_3');
        $crane->ket_4 = $request->input('ket_4');
        $crane->ket_5 = $request->input('ket_5');
        $crane->ket_6 = $request->input('ket_6');
        $crane->ket_7 = $request->input('ket_7');
        $crane->ket_8 = $request->input('ket_8');
        $crane->ket_9 = $request->input('ket_9');
        $crane->ket_10 = $request->input('ket_10');
        $crane->ket_11 = $request->input('ket_11');
        $crane->ket_12 = $request->input('ket_12');
        $crane->ket_13 = $request->input('ket_13');
        $crane->checklist_1 = $request->input('checklist_1');
        $crane->checklist_2 = $request->input('checklist_2');
        $crane->checklist_3 = $request->input('checklist_3');
        $crane->checklist_4 = $request->input('checklist_4');
        $crane->checklist_5 = $request->input('checklist_5');
        $crane->checklist_6 = $request->input('checklist_6');
        $crane->checklist_7 = $request->input('checklist_7');
        $crane->checklist_8 = $request->input('checklist_8');
        $crane->checklist_9 = $request->input('checklist_9');
        $crane->checklist_10 = $request->input('checklist_10');
        $crane->checklist_11 = $request->input('checklist_11');
        $crane->checklist_12 = $request->input('checklist_12');
        $crane->checklist_13 = $request->input('checklist_13');
        $crane->save();
        return redirect()->back();
    }

    public function showCraneLLC()
    {
        return view('inspeksi.llc');
    }

    public function showCranePH()
    {
        return view('inspeksi.ph');
    }
    public function showCraneOverhead()
    {
        return view('inspeksi.overhead');
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
