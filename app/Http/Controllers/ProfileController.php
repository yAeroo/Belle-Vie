<?php

namespace App\Http\Controllers;

use App\Models\User;
use App\Models\Place;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\DB;

class ProfileController extends Controller
{
    public function __construct(){
        // Verificar inicio de sesión
        $this->middleware('auth');
    }

    public function index(User $user){
        $userPlaces = Place::where('owner_id', $user->id)->get();

        return view('profile',[
            'user' => $user, 'user_fn' => $user->name." ".$user->last_name,
            'places' => $userPlaces
        ]);
    }
}
