<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Models\ContactUs;

class contactusController extends Controller
{
    public function store(Request $request)
    {
        $post = new ContactUs;
        $post->name = $request->name;
        $post->email = $request->email;
        $post->message = $request->message;
        $post->save();
        return redirect('contactus');
    }
}
