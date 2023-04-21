<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;

class SettingsController extends Controller
{
    // Definiendo la función con el nombre "index"
    public function profile(){ 
        // Método a utilizar para retornar la ruta
        return view('settings');
        // auth.login automaticamente se dirige a 'resources/views/auth/login'
    }
}
