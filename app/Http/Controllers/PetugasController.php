<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;

class PetugasController extends Controller
{
    public function apdsubmit(Request $request){
    	return redirect()->intended(route('petugas.checklist.crane'));
    }
}
