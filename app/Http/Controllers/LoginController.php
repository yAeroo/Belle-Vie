<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;

class LoginController extends Controller
{
    // Definiendo la función con el nombre "index"
    public function index(){ 
        // Método a utilizar para retornar la ruta
        return view('auth.login');
        // auth.login automaticamente se dirige a 'resources/views/auth/login'
    }
}
