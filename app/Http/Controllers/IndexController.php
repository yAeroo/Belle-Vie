<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;

class IndexController extends Controller
{
    public function __construct(){
        // Verificar inicio de sesión
        $this->middleware('auth');
    }

    public function index(){
        return view('index');
    }
}
