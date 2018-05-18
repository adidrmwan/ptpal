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
        $authuser = Auth::user();
        $users = DB::table('inspeksi')
            ->join('users', 'users.id', '=', 'inspeksi.id_user')
            ->join('crane_goliath', 'crane_goliath.id_inspeksi', '=', 'inspeksi.id')
            ->join('mesin', 'inspeksi.nama_mesin', '=', 'mesin.nama_mesin')
            ->where('inspeksi.id', $id)
            ->where('inspeksi.id_user', $authuser->id)
            ->select('users.name', 'users.department', 'users.divisi', 'crane_goliath.*', 'inspeksi.*', 'mesin.kode_mesin')
            ->get();
        // dd($users);
        PDF::setOptions(['dpi' => 150, 'defaultFont' => 'sans-serif']);
        $pdf = PDF::loadView('pdf.pdf', compact('users'));
        return $pdf->download('pdfview.pdf');
    }
}
