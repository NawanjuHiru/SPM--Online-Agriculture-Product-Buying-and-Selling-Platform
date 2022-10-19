<?php

namespace App\Http\Controllers\order_management;

use App\Http\Controllers\Controller;
use App\Models\order_management\Order;
use Barryvdh\DomPDF\Facade\Pdf;
use Illuminate\Http\Request;
use Yajra\DataTables\DataTables;

class AdminOrderController extends Controller
{
    /**
     * Display a listing of the resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function index()
    {
        $data = Order::all();
        return view('Admin.order_management.retrieve_all_orders')->with('order_details', $data);
    }

    /**
     * Show the form for creating a new resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function create()
    {
        //
    }

    /**
     * Store a newly created resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @return \Illuminate\Http\Response
     */
    public function store(Request $request)
    {
        //
    }

    /**
     * Display the specified resource.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function show($id)
    {
        //
    }

    /**
     * Show the form for editing the specified resource.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function edit($id)
    {
        $order = Order::with('product')->where('order_id', $id)->first();
        return view('Admin.order_management.admin_update_order',compact('order'));
    }

    /**
     * Update the specified resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @param  int  $id
     * @return \Illuminate\Contracts\Foundation\Application|\Illuminate\Contracts\View\Factory|\Illuminate\Contracts\View\View|\Illuminate\Http\Response
     */
    public function update(Request $request)
    {
        $updatedata = Order::find($request->order_id);
        $updatedata->name = $request->name;
        $updatedata->contact_number = $request->contact_number;
        $updatedata->email = $request->email;
        $updatedata->address = $request->address;
        $updatedata->zip_code = $request->zip_code;
        $updatedata->city = $request->city;

        $updatedata->save();
        $orderdatas = Order::all();
        return view('Admin.order_management.retrieve_all_orders')->with('order_details', $orderdatas);
    }

    /**
     * Remove the specified resource from storage.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function destroy($id)
    {
        //
    }

    public function getOrderList(Request $request)
    {
        $orders = Order::all();

        return DataTables::of($orders)
            ->addColumn('action', function ($orders) {
                return '<div >
               <a href="' . url('/adminorders/' . $orders->order_id . '/edit') . '" class="btn btn" style="background-color:#09560D!important;color:white;" ><i class="fa fa-pencil-square-o" aria-hidden="true"></i></a>
               <button class="btn btn btn_delete " data-id="' . $orders->order_id . '" style="background-color:#CF0808!important;color:white;width:45px;margin-top: 10px;"><i class="fa fa-trash" aria-hidden="true"></i></button>


           </div>  ';
            })
            ->rawColumns(['action'])
            ->make();
    }

    public function downloadPdf(){

        $order_details = Order::all();
        $pdf = PDF::loadView('Admin.order_management.order_report',compact('order_details'));
        return $pdf->download('Order Report.pdf');
    }
}
