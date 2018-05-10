<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;

class ChecklistController extends Controller
{
    public function index()
    {
        return view('checklist.checklist');
    }

    public function crane()
    {
        return view('checklist.crane');
    }

    public function forklift()
    {
        return view('checklist.forklift');
    }
}
