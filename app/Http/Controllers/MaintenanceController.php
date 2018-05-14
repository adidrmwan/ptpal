<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;

class MaintenanceController extends Controller
{
    public function reportinspeksi()
    {
        return view('maintenance.reportinspeksi');
    }

}
