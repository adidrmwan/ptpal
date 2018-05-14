<?php

namespace App\Http\Controllers\Auth;

use Illuminate\Http\Request;
use App\Http\Controllers\Controller;
use Illuminate\Support\Facades\Validator;
use App\PetugasMaintenance;

use Auth;

class PetugasRegisterController extends Controller
{
	public function showRegisterForm()
    {
        return view('auth.petugas-register');
    }

	public function register(Request $request)
    {

       //Validates data
        $this->validator($request->all())->validate();

       //Create seller
        $petugas = $this->create($request->all());

        //Authenticates seller
        $this->guard()->login($petugas);

       //Redirects sellers
       return redirect()->intended(route('petugas.dashboard'));
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
        return PetugasMaintenance::create([
            'name' => $data['name'],
            'email' => $data['email'],
            'password' => bcrypt($data['password']),
            'departemen' => $data['departemen'],
            'divisi' => $data['divisi'],
        ]);
    }

    protected function guard()
   {
       return Auth::guard('petugas');
   }
}
