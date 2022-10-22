<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Models\ContactUs;

class contactusController extends Controller
{
    public function store(Request $request)
    {
        $input = $request->all();

        $request->validate([
            'name' => 'required',
            'email' => 'required|email|max:255',
            'message' => 'required',
        ]);

        $post = new ContactUs;
        $post->name = $request->name;
        $post->email = $request->email;
        $post->message = $request->message;
        $post->save();
        return redirect('contactus')->with('success','Successfully posted your message');;
    }
}
