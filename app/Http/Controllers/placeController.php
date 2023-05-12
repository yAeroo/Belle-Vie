<?php

namespace App\Http\Controllers;

use App\Models\User;
use App\Models\Place;
use App\Models\Review;
use Illuminate\Support\Str;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\DB;
use Intervention\Image\Facades\Image;
use Illuminate\Support\Facades\Redirect;

class placeController extends Controller
{

    public function __construct(){
        // Verificar inicio de sesión
        $this->middleware('auth');
    }

    public function index(Place $place, User $user){

        $user = User::where('id', $place->owner_id)->first();
        $reviews = Review::where('place_id', $place->id)->get();
        
        return view('showPlace', [
            'user' => $user, 'user_fn' => $user->name." ".$user->last_name,
            'place' => $place,
            'reviews' => $reviews
        ]);
    }

    public function placeList(User $user){
        $places = Place::all();
        
        return view('placesList', [
            'places' => $places 
        ]);
    }

    public function indexList(User $user){
        
        if ($user->type == 'owner') {

            if ($user->id != Auth()->user()->id) {
                return Redirect::back();
            }

            $userPlaces = Place::where('owner_id', $user->id)->get();

            return view('places',[
                'user' => $user, 'user_fn' => $user->name." ".$user->last_name,
                'places' => $userPlaces
            ]);
        } else {
            return Redirect::back();
        }
    }

    public function placeEdit(Place $place){
        $user = Auth()->user();

        if ($user->type == 'owner') {

            if ($place->owner_id != Auth()->user()->id) {
                return Redirect::back();
            }

            return view('settings.PlaceConfig',[
                'user' => $user, 'user_fn' => $user->name." ".$user->last_name,
                'place' => $place
            ]);
        } else {
            return Redirect::back();
        }
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

        return redirect(route('profile', $user));
    }

    public function placeEditStore(Place $place ,Request $request){
        $success = false;

        if ($request->image){
            $this->validate($request, [
                'image' => ['image', 'mimes:jpeg,png,jpg'],
            ]);

            // Procesando imagen de rancho
            $image = $request->file('image');
            $newImage = Str::uuid() . '.' . $image->extension();
            $imageUpdate = Image::make($image);
            $imageUpdate->fit(500, 300);
            $imageSave = storage_path('app') . '/public/place/' . $newImage;
            $imageUpdate->save($imageSave);

            $sqlUpdateDB = DB::table('places')
                ->where('id', $place->id)
                ->update(['img' => $newImage]);
            $success = true;
        }

        if ($request->place_name != "" && $request->place_name != $place->place_name) {

            $request->validate([
                'place_name' => 'max:50',
            ]);

            $newPlaceName = $request->place_name;

            $sqlUpdateDB = DB::table('places')
                        ->where('id', $place->id)
                        ->update(['place_name' => $newPlaceName]);
            $success = true;
        }

        if ($request->price != "" && $request->price != $place->price) {

            $request->validate([
                'price'=> 'numeric|between:0,99.99',
            ]);

            $newPrice = $request->price;

            $sqlUpdateDB = DB::table('places')
                        ->where('id', $place->id)
                        ->update(['price' => $newPrice]);
            $success = true;
        }

        if ($request->description != "" && $request->description != $place->description) {

            $request->validate([
                'description'=> 'max:300',
            ]);

            $newDesc = $request->description;

            $sqlUpdateDB = DB::table('places')
                        ->where('id', $place->id)
                        ->update(['description' => $newDesc]);
            $success = true;
        }
        
        return redirect()->back()->with('success', $success);
    }

    public function destroy(Place $place){
        $place->delete();
        $success = true;
        return redirect()->back()->with('success', $success);
    }
}
