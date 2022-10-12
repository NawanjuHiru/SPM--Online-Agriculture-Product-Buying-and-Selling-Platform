<?php

namespace App\Http\Controllers\order_management;

use App\Http\Controllers\Controller;
use App\Models\order_management\Order;
use App\Models\product_management\productModel;

use Barryvdh\DomPDF\Facade\Pdf;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\Validator;
use Yajra\DataTables\DataTables;



class OrderController extends Controller
{
    public function index()
    {
        $data = Order::all();
        return view('order_management.retrieve_all_orders')->with('order_details', $data);
    }


    public function create()
    {
        return view('order_management.create_order');
    }


    public function store(Request $request)
    {
        parse_str($request['formdata'], $formdata);

        $validator = Validator::make($formdata, [
            'name' => 'required|max:1000|min:5|string',
            'contact_number' => 'required|max:1000|min:5',
            'email' => 'required|max:1000|min:5',
            'address' => 'required|max:1000|min:5|string',
            'zip_code' => 'required|max:1000|min:5',
            'city' => 'required|max:1000|min:5|string',

        ]);


        if ($validator->fails()) {
            return response()->Json(['status' => 'error', 'msg' => 'validation failed']);

        }

        $task = new Order();

        $task->name = $formdata['name'];
        $task->product_id = $formdata['product_id'];
        $task->contact_number = $formdata['contact_number'];
        $task->email = $formdata['email'];
        $task->address = $formdata['address'];
        $task->zip_code = $formdata['zip_code'];
        $task->city = $formdata['city'];


        $task->save();
        return response()->Json(['status' => 'success', 'msg' => 'Added successfully', 'orderId'=>$task->order_id]);
    }

    /**
     * Display the specified resource.
     *
     * @param int $id
     * @return \Illuminate\Http\Response
     */
    public function show($id)
    {
        //
    }

    /**
     * Show the form for editing the specified resource.
     *
     * @param int $id
     * @return \Illuminate\Contracts\Foundation\Application|\Illuminate\Contracts\View\Factory|\Illuminate\Contracts\View\View|\Illuminate\Http\Response
     */
    public function edit($id)
    {
        $order = Order::with('product')->where('order_id', $id)->first();
        return view('order_management.update_order',compact('order'));
    }

    /**
     * Update the specified resource in storage.
     *
     * @param \Illuminate\Http\Request $request
     * @param int $id
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
        return view('order_management.payment')->with('order_details', $orderdatas);
    }

    /**
     * Remove the specified resource from storage.
     *
     * @param int $id
     * @return \Illuminate\Http\Response
     */
    public function destroy($id)
    {
        $order = Order::find($id);
        $order->delete();
        return response()->Json(['status' => 'success', 'msg' => 'Deleted successfully']);
    }

    public function getOrderList(Request $request)
    {
        $orders = Order::all();

        return DataTables::of($orders)
            ->addColumn('action', function ($orders) {
                return '<div >
               <a href="' . url('/orders/' . $orders->order_id . '/edit') . '" class="btn btn" style="background-color:#09560D!important;color:white;" ><i class="fa fa-pencil-square-o" aria-hidden="true"></i></a>
               <button class="btn btn btn_delete " data-id="' . $orders->order_id . '" style="background-color:#CF0808!important;color:white;width:45px;margin-top: 10px;"><i class="fa fa-trash" aria-hidden="true"></i></button>


           </div>  ';
            })
            ->rawColumns(['action'])
            ->make();
    }


    public function retrieveOrder(Request $request)
    {
        parse_str($request['formdata'], $formdata);

        $validator = Validator::make($formdata, [
            'name' => 'required|max:1000|min:5|string',
            'contact_number' => 'required|max:1000|min:5',
            'email' => 'required|max:1000|min:5',
            'address' => 'required|max:1000|min:5|string',
            'zip_code' => 'required|max:1000|min:5',
            'city' => 'required|max:1000|min:5|string',

        ]);


        if ($validator->fails()) {
            return response()->Json(['status' => 'error', 'msg' => 'validation failed']);

        }

        $task = new Order();

        $task->name = $formdata['name'];
        $task->contact_number = $formdata['contact_number'];
        $task->email = $formdata['email'];
        $task->address = $formdata['address'];
        $task->zip_code = $formdata['zip_code'];
        $task->city = $formdata['city'];


        $task->save();
        return response()->Json(['status' => 'success', 'msg' => 'Added successfully']);
    }

    public function createOrder($id){
        $product = productModel::find($id);
        return view('order_management.create_order', compact('product'));
    }

    public function downloadPdf(){

        $order_details = Order::all();
        $pdf = PDF::loadView('order_management.order_report',compact('order_details'));
        return $pdf->download('retrieve_all_orders.pdf');
    }

}
