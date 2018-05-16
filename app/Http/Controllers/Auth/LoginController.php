<?php

namespace App\Http\Controllers\Auth;

use App\Http\Controllers\Controller;
use Illuminate\Foundation\Auth\AuthenticatesUsers;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\DB;
use Auth;
use App\UserRole;
class LoginController extends Controller
{
    /*
    |--------------------------------------------------------------------------
    | Login Controller
    |--------------------------------------------------------------------------
    |
    | This controller handles authenticating users for the application and
    | redirecting them to your home screen. The controller uses a trait
    | to conveniently provide its functionality to your applications.
    |
    */

    use AuthenticatesUsers;

    protected function authenticated(Request $request, $user)
    {
        $user = Auth::user();
        $userrole = DB::select("select role_id from role_user where user_id = '$user->id'");
        if ( $userrole = 2 ) {
            return redirect()->route('petugas.home');
        }
    }    

    public function __construct()
    {
        $this->middleware('guest')->except('logout');
    }


}
