<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;

class ManagerController extends Controller
{
<<<<<<< HEAD
    /**
     * Create a new controller instance.
     *
     * @return void
     */
    public function __construct()
    {
        $this->middleware('auth:manager');
    }
    /**
     * Show the application dashboard.
     *
     * @return \Illuminate\Http\Response
     */
    public function index()
    {
        return view('manager.dashboard');
=======
    public function __construct()
    {
        $this->middleware('auth');
        $this->middleware('role:ROLE_MANAGER');
    }

    public function index()
    {
        return view('manager.home');
>>>>>>> user
    }
}
