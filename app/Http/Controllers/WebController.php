<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Http\Requests\Web\LoginRequest;
use Illuminate\Support\Facades\Auth;
use App\Models\User;

class WebController extends Controller
{
    public function home()
    {
        return view('home');
    }
    public function login(LoginRequest $request) {
        $user = User::where('email', $request->email)->first();
		if ($user) {
			if ($user->hasRole('administrador')) {
				if (Auth::attempt([
					'email'		        => $request->email,
					'password'	        => $request->password
				], true)) {
					return redirect()->route('admin-home');
				}
				return view('home', ['error_message' => 'Credenciales invalidas', 'email' => $request->email, 'password' => $request->password]);
			} else {
				return view('home', ['error_message' => 'Acceso solo para administradores', 'email' => $request->email, 'password' => $request->password]);
			}
		}
		return view('home', ['error_message' => 'Credenciales invalidas', 'email' => $request->email, 'password' => $request->password]);
    }
    public function logout(Request $request) {
        Auth::logout();
		$request->session()->invalidate();
		$request->session()->regenerateToken();
		return redirect()->route('home-login');
    }
}
