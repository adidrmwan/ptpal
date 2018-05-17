<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;

class InspeksiController extends Controller
{
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

    public function showCraneGoliath()
    {
        return view('inspeksi.goliath');
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
}
