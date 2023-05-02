<?php

namespace App\Http\Controllers;

use App\Models\User;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\Auth;
use Illuminate\Support\Facades\Hash;
use Illuminate\Support\Facades\DB;
use Illuminate\Support\Facades\Redirect;
use Illuminate\Support\Facades\Redis;

class SettingsController extends Controller
{
    public function __construct(){
        // Verificar inicio de sesión
        $this->middleware('auth');
    }

    public function index(User $user){
        
        if ($user->id != Auth()->user()->id) {
            return Redirect::back();
        }
        
        return view('settings',[
            'user' => $user
        ]);
    }

    public function index2(User $user){
        
        if ($user->id != Auth()->user()->id) {
            return Redirect::back();
        }
        
        return view('configTest',[
            'user' => $user
        ]);
    }

    public function store(Request $request, User $user){
        
        if ($request->email != "" && $request->email != $user->email) {

            $request->validate([
                'email'=> 'bail|required|unique:users|email|max:30'
            ]);

            $newEmail = $request->email;

            $sqlUpdateDB = DB::table('users')
                        ->where('id', $user->id)
                        ->update(['email'=> $newEmail]);
        }

        if ($request->phone_number != "" && $request->phone_number != $user->phone_number) {

            $request->validate([
                'phone_number'=> 'max:9'
            ]);

            $newPhone = $request->phone_number;

            $sqlUpdateDB = DB::table('users')
                        ->where('id', $user->id)
                        ->update(['phone_number'=> $newPhone]);
        }
        
        if ($request->oldPW != "") {
            
            if (Hash::check($request->oldPW, $user->password)) {
                if ($request->newPW != "" && !Hash::check($request->newPW, $user->password)) {
                    $request->validate([
                        'newPW'=> 'confirmed|max:30|min:4'
                    ]);

                    $sqlUpdateDB = DB::table('users')
                                ->where('id', $user->id)
                                ->update(['password'=> Hash::make($request->newPW)]);
                }
            }
        }
        
        return Redirect::back();
    }
}
