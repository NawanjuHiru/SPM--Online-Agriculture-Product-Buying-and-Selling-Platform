<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Models\ReviewRating;

class reviewController extends Controller
{
    public function store(Request $request)
    {
        $post = new ReviewRating;
        $post->username = $request->username;
        $post->comments = $request->comments;
        $post->star_rating = $request->star_rating;
        $post->save();
        return redirect('review');
    }

    public function view()
    {
        $data=ReviewRating::all();
        return view('reviewratings')->with('reviewratings',$data);
    }
}
