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

    public function view()
    {
        $data=Delivery::paginate(10);
        return view('deliveries')->with('deliveries',$data);
    }

    public function delete($id)
    {
        $delete=Delivery::find($id);
        $delete->delete();
        return redirect('/admin/delivery')->with('deliveries',$delete);
    }
}
