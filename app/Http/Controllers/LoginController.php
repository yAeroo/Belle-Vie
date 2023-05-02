<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use Illuminate\Support\Facades\Auth;
use Illuminate\Validation\ValidationException;

class LoginController extends Controller
{
    public function index(){ 
        return view('auth.login');
    }

    public function store(Request $request){
        $credentials = $request->validate([
            'email'=>'required|email|max:30',
            'password'=>'required|min:4|max:30',
        ]);

        if (Auth::attempt($credentials)) {
            $request->session()->regenerate();

            return redirect('index');
        }

        throw ValidationException::withMessages([
            'email' => __('auth.failed')
        ]);
    }

    public function logout(Request $request){
        Auth::logout();

        $request->session()->invalidate();
        $request->session()->regenerateToken();
        return redirect(route('login'));
    }
}
