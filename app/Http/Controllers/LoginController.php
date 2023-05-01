<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use Illuminate\Support\Facades\Auth;

class LoginController extends Controller
{
    public function index(){ 
        return view('auth.login');
    }

    public function index2(){ 
        return view('auth.loginTest');
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
    }

    public function logout(Request $request){
        Auth::logout();

        $request->session()->invalidate();
        $request->session()->regenerateToken();
        return redirect(route('login'));
    }
}
