<?php

namespace App\Http\Controllers;

use App\Models\User;
use Illuminate\Support\Str;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\DB;
use Illuminate\Support\Facades\Hash;
use Intervention\Image\Facades\Image;
use Illuminate\Support\Facades\Redirect;

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

        return view('settings.UserConfig',[
            'user' => $user, 'user_fn' => $user->name." ".$user->last_name,
        ]);
    }

    public function store(Request $request, User $user){

        $success = false;

        if ($request->image){
            $this->validate($request, [
                'image' => ['image', 'mimes:jpeg,png,jpg'],
            ]);

            $image = $request->file('image');

            $newImage = Str::uuid() . '.' . $image->extension();

            $imageUpdate = Image::make($image);
            $imageUpdate->fit(500, 500);

            $imageSave = storage_path('app') . '/public/pfp/' . $newImage;
            $imageUpdate->save($imageSave);

            $sqlUpdateDB = DB::table('users')
                ->where('id', $user->id)
                ->update(['profile_pic' => $newImage]);
            $imageStatus = true;
            $success = true;

        }else{ $imageStatus = false;}

        if ($request->email != "" && $request->email != $user->email) {

            $request->validate([
                'email'=> 'unique:users|email|max:30'
            ]);

            $newEmail = $request->email;

            $sqlUpdateDB = DB::table('users')
                        ->where('id', $user->id)
                        ->update(['email'=> $newEmail]);
            $success = true;
        }

        if ($request->phone_number != "" && $request->phone_number != $user->phone_number) {

            $request->validate([
                'phone_number'=> 'max:9'
            ]);

            $newPhone = $request->phone_number;

            $sqlUpdateDB = DB::table('users')
                        ->where('id', $user->id)
                        ->update(['phone_number'=> $newPhone]);
            $success = true;
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
                    
                    $success = true;
                }
            }
        }
        
        return redirect()->back()->with(['imageStatus' => $imageStatus, 'success' => $success]);
    }
}
