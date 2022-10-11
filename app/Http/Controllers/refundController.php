<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Models\Refund;

class refundController extends Controller
{
    public function store(Request $request)
    {
        $post = new Refund;
        $post->username = $request->username;
        $post->orderno = $request->orderno;
        $post->address = $request->address;
        $post->save();
        return redirect('refund');
    }
}
