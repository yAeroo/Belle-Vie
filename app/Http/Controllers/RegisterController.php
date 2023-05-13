<?php

namespace App\Http\Controllers;

use App\Models\User;
use Illuminate\Http\Request;
use Illuminate\Support\Str;
use Illuminate\Support\Facades\Auth;
use Illuminate\Support\Facades\Hash;

class RegisterController extends Controller
{
    public function index(){
        return view('auth.register');
    }

    public function store(Request $request){
        $request->validate([
            'username'=> 'bail|required|unique:users|alpha_dash:ascii|max:15|min:4',
            'name'=> 'required|alpha_dash:ascii|max:20|min:3',
            'last_name'=> 'required|alpha_dash:ascii|max:20|min:3',
            'email'=> 'bail|required|unique:users|email|max:30',
            'phone_number'=> 'nullable|numeric|max:8',
            'password'=> 'required|confirmed|max:30|min:4',
            'gender'=> 'required',
            'type'=> 'required',
        ]);

        User::create([
            'username' => Str::slug($request->username),
            'name' => $request->name,
            'last_name' => $request->last_name,
            'email' => $request->email,
            'phone_number' => $request->phone_number,
            'password' => Hash::make($request->password),
            'gender' => $request->gender,
            'type' => $request->type,
        ]);

        auth()->attempt($request->only('email', 'password'));

        return redirect('index');
    }
}
