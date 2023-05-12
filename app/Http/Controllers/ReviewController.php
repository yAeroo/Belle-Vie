<?php

namespace App\Http\Controllers;

use App\Models\Place;
use App\Models\Review;
use App\Models\User;
use Illuminate\Http\Request;

class ReviewController extends Controller
{
    public function store(Request $request, Place $place, User $user){
        
        $request->validate([
            'review' => 'max:500'
        ]);

        $user = auth()->user();

        Review::create([
            'user_id' => $user->id,
            'place_id' => $place->id,
            'review' => $request->review,
        ]);

        $success = true;

        return redirect()->back()->with('success', $success);
    }

    public function destroy(Place $place, Review $review){
        $review->delete();
        $success = true;
        return redirect()->back()->with('success', $success);
    }
}
