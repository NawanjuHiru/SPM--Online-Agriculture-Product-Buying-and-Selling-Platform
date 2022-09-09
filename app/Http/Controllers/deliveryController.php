<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Models\Delivery;

class deliveryController extends Controller
{
    public function store(Request $request)
    {
        $post = new Delivery;
        $post->username = $request->username;
        $post->telno = $request->telno;
        $post->address = $request->address;
        $post->save();
        return redirect('delivery');
    }
}
