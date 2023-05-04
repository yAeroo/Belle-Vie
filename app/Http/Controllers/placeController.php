<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Models\User;

class placeController extends Controller
{
    public function index(User $user){
        $user = Auth()->user();

        return view('showPlace', [
            'user' => $user
        ]);
    }
}
