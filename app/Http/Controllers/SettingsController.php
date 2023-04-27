<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;

class SettingsController extends Controller
{
    public function __construct(){
        // Verificar inicio de sesión
        $this->middleware('auth');
    }

    public function index(){ 
        $user =   Auth()->user();

        return view('settings',[
            'user' => $user
        ]);
    }
}
