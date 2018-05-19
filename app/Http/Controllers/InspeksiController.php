<?php

namespace App\Http\Controllers;

use Illuminate\Support\Facades\DB;
use App\Http\Controllers\Controller;
use Illuminate\Support\Facades\Validator;
use Illuminate\Http\Request;
use App\Inspeksi;
use App\CraneGoliath;
use Auth;
use PDF;
use Alert;

class InspeksiController extends Controller
{
    public function showCraneGoliath()
    {
        $mesin = DB::table('mesin')->get();
        // dd($mesin);
        return view('inspeksi.crane-goliath', ['mesin' => $mesin]);
    }

    public function submitCraneGoliath(Request $request)
    {
        $validator = Validator::make($request->all(), [
            'nama_mesin' => 'required','bengkel' => 'required',
            'shift_hour' => 'required','tgl_inspeksi' => 'required',
            'checklist_1' => 'required','checklist_2' => 'required',
            'checklist_3' => 'required','checklist_4' => 'required',
            'checklist_5' => 'required','checklist_6' => 'required',
            'checklist_7' => 'required','checklist_8' => 'required',
            'checklist_9' => 'required','checklist_10' => 'required',
            'checklist_11' => 'required','checklist_12' => 'required',
            'checklist_13' => 'required','catatan' => 'required',
        ]);

        if ($validator->fails()) {
            Alert::warning('Wajib mengisi kondisi pada setiap unit', 'Perhatian!');
            return redirect()->back()->withInput($request->all());
        }
        else {
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

            return redirect()->intended(route('crane.goliath.view', $crane->id_inspeksi));
        }
         
    }


    public function viewCraneGoliath($id)
    {
        $authuser = Auth::user();
        $crane = DB::table('inspeksi')
            ->join('users', 'users.id', '=', 'inspeksi.id_user')
            ->join('crane_goliath', 'crane_goliath.id_inspeksi', '=', 'inspeksi.id')
            ->join('mesin', 'inspeksi.nama_mesin', '=', 'mesin.nama_mesin')
            ->where('inspeksi.id', $id)
            ->where('inspeksi.id_user', $authuser->id)
            ->select('users.name', 'users.department', 'users.divisi', 'crane_goliath.*', 'inspeksi.*', 'mesin.kode_mesin')
            ->get();
        return view('inspeksi.view-goliath', ['crane' => $crane]);
    }

    public function downloadCraneGoliath()
    {
        $pdf = PDF::loadView('home');
        return $pdf->download('pdf-goliath.pdf');
    }

    public function showCraneLLC()
    {

       $mesin = DB::table('mesin')->get();
       return view('inspeksi.crane-llc', ['mesin' => $mesin]);
    }

    public function submitCraneLLC(Request $request)
    {
        $userid = Auth::user()->id;
        $tipecrane = 'LLC';
        $inspeksi = new Inspeksi();
        $inspeksi->id_user = $userid;
        $inspeksi->tipe_crane = $tipecrane;

        $inspeksi->nama_mesin = $request->input('nama_mesin');
        $inspeksi->bengkel = $request->input('bengkel');
        $inspeksi->shift_hour = $request->input('shift_hour');
        $inspeksi->tgl_inspeksi = $request->input('tgl_inspeksi');
        $inspeksi->catatan = $request->input('catatan');

        $inspeksi->save();

        $crane = new CraneLLC();
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
        $crane->ket_13 = $request->input('ket_14');
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
        $crane->checklist_13 = $request->input('checklist_14');
        $crane->save();

        return redirect()->intended(route('petugas.checklist.crane'));
    }

    public function showCranePH()
    {
        $mesin = DB::table('mesin')->get();
        return view('inspeksi.crane-ph', ['mesin' => $mesin]);
    }

    public function submitCranePH(Request $request)
    {
        $userid = Auth::user()->id;
        $tipecrane = 'PH';
        $inspeksi = new Inspeksi();
        $inspeksi->id_user = $userid;
        $inspeksi->tipe_crane = $tipecrane;

        $inspeksi->nama_mesin = $request->input('nama_mesin');
        $inspeksi->bengkel = $request->input('bengkel');
        $inspeksi->shift_hour = $request->input('shift_hour');
        $inspeksi->tgl_inspeksi = $request->input('tgl_inspeksi');
        $inspeksi->catatan = $request->input('catatan');

        $inspeksi->save();

        $crane = new CranePH();
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
        $crane->ket_13 = $request->input('ket_14');
        $crane->ket_13 = $request->input('ket_15');
        $crane->ket_13 = $request->input('ket_16');
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
        $crane->checklist_13 = $request->input('checklist_14');
        $crane->checklist_13 = $request->input('checklist_15');
        $crane->checklist_13 = $request->input('checklist_16');
        $crane->save();

        return redirect()->intended(route('petugas.checklist.crane'));
    }

    public function showCraneOverhead()
    {
        $mesin = DB::table('mesin')->get();
        return view('inspeksi.crane-overhead', ['mesin' => $mesin]);
    }

    public function submitCraneOverhead(Request $request)
    {
        $userid = Auth::user()->id;
        $tipecrane = 'Overhead';
        $inspeksi = new Inspeksi();
        $inspeksi->id_user = $userid;
        $inspeksi->tipe_crane = $tipecrane;

        $inspeksi->nama_mesin = $request->input('nama_mesin');
        $inspeksi->bengkel = $request->input('bengkel');
        $inspeksi->shift_hour = $request->input('shift_hour');
        $inspeksi->tgl_inspeksi = $request->input('tgl_inspeksi');
        $inspeksi->catatan = $request->input('catatan');

        $inspeksi->save();

        $crane = new CraneOverhead();
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
        $crane->ket_13 = $request->input('ket_14');
        $crane->ket_13 = $request->input('ket_15');
        $crane->ket_13 = $request->input('ket_16');
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
        $crane->checklist_13 = $request->input('checklist_14');
        $crane->checklist_13 = $request->input('checklist_15');
        $crane->checklist_13 = $request->input('checklist_16');
        $crane->save();

        return redirect()->intended(route('petugas.checklist.crane'));
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
