<?php

namespace App\Http\Controllers\Auth;

use Illuminate\Http\Request;
use App\Http\Controllers\Controller;
use Illuminate\Support\Facades\Validator;
use App\Manager;

use Auth;

class ManagerRegisterController extends Controller
{
	public function showRegisterForm()
    {
        return view('auth.manager-register');
    }

	public function register(Request $request)
    {

       //Validates data
        $this->validator($request->all())->validate();

       //Create seller
        $manager = $this->create($request->all());

        //Authenticates seller
        $this->guard()->login($manager);

       //Redirects sellers
        return redirect()->intended(route('manager.dashboard'));
    }

    protected function validator(array $data)
    {
        return Validator::make($data, [
            'name' => 'required|string|max:191',
            'email' => 'required|string|email|max:191|unique:users',
            'password' => 'required|string|min:6|confirmed',
            'departemen' => 'required|string|max:191',
            'divisi' => 'required|string|max:191',
        ]);
    }

    protected function create(array $data)
    {
        return Manager::create([
            'name' => $data['name'],
            'email' => $data['email'],
            'password' => bcrypt($data['password']),
            'departemen' => $data['departemen'],
            'divisi' => $data['divisi'],
        ]);
    }

    protected function guard()
   {
       return Auth::guard('manager');
   }
}
