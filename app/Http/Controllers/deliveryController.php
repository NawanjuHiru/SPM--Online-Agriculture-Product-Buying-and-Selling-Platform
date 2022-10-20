<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Models\Delivery;
use Barryvdh\DomPDF\Facade\Pdf;

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

    public function edit($id)
    {
        $data = Delivery::find($id);
        return view('Admin.edit-delivery',['data'=>$data]);
        // $edit=Delivery::find($id);
    }

    public function update(Request $request){
        $updatedata = Delivery::find($request->id);
        $updatedata->username = $request->username;
        $updatedata->telno = $request->telno;
        $updatedata->status = $request->status;
        $updatedata->address = $request->address;
        $updatedata->save();
        $deliberydata = Delivery::all();
        return view('Admin.delivery')->with('deliveries', $deliberydata);

    }

    public function viewPDF(){
        $pdf = PDF::loadHTML('<h2>Delivery Details</h2>');
        return $pdf->stream();
    }
    public function downloadPdf(){
        $deliveries = Delivery::all();
        $pdf = PDF::loadView('Admin.viewpdf',compact('deliveries'));
        return $pdf->download('Delivery_details.pdf');

    }
}
