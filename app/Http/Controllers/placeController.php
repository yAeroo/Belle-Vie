<?php

namespace App\Http\Controllers;

use App\Models\User;
use App\Models\Place;
use Illuminate\Support\Str;
use Illuminate\Http\Request;
use Intervention\Image\Facades\Image;
use Illuminate\Support\Facades\Redirect;

class placeController extends Controller
{

    public function __construct(){
        // Verificar inicio de sesión
        $this->middleware('auth');
    }

    public function index(User $user, Place $place){

        $user = User::where('id', $place->owner_id)->first();
        
        return view('showPlace', [
            'user' => $user, 'user_fn' => $user->name." ".$user->last_name,
            'place' => $place
        ]);
    }

    public function newIndex(User $user){
        $user = Auth()->user();

        if ($user->type == 'owner') {
            return view('newPlace',[
                'user' => $user
            ]);
        } else {
            return Redirect::back();
        }
    }

    public function store(User $user, Request $request){

        $user = Auth()->user();

        $request->validate([
            'image' => 'required|image|mimes:jpeg,png,jpg',
            'place_name' => 'required|max:50',
            'description' => 'required|max:300',
            'location' => 'required',
            'price' => 'required|numeric|between:0,99.99',
        ]);

        // Procesando imagen de rancho
        $image = $request->file('image');
        $newImage = Str::uuid() . '.' . $image->extension();
        $imageUpdate = Image::make($image);
        $imageUpdate->fit(500, 300);
        $imageSave = storage_path('app') . '/public/place/' . $newImage;
        $imageUpdate->save($imageSave);

        Place::create([
            'owner_id' => $user->id,
            'place_name'=> $request->place_name,
            'description' => $request->description,
            'location' => $request->location,
            'price' => $request->price,
            'img' => $newImage,
        ]);

        return redirect()->back();
    }
}
