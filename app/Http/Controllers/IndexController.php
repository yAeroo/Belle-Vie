<?php

namespace App\Http\Controllers;

use App\Models\User;
use App\Models\Place;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\DB;

class IndexController extends Controller
{
    public function __construct(){
        // Verificar inicio de sesión
        $this->middleware('auth');
    }

    public function index(User $user){
        $user = Auth()->user();

        $places = Place::query()->inRandomOrder()->take(3)->get();
        $places2 = Place::query()->inRandomOrder()->take(3)->get(); 

        return view('index',[
            'user' => $user,
            'places' => $places,
            'placesSlide' => $places2
        ]);
    }
}
