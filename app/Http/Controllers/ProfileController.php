<?php

namespace App\Http\Controllers;

use App\Models\User;
use Illuminate\Http\Request;

class ProfileController extends Controller
{
    public function __construct(){
        // Verificar inicio de sesión
        $this->middleware('auth');
    }

    public function index(User $user){
        
        return view('profile',[
            'user' => $user,
            'user_fn' => $user->name." ".$user->last_name
        ]);
    }
}
