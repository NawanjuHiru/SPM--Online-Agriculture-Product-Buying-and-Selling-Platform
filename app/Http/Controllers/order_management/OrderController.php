<?php

namespace App\Http\Controllers\order_management;

use App\Http\Controllers\Controller;
use App\Models\order_management\Order;
use App\Models\product_management\productModel;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\Validator;

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
            'name' => 'required',
            'contact_number' => 'required',
            'email' => 'required',
            'address' => 'required',
            'zip_code' => 'required',
            'city' => 'required',

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

    public function retrieveOrder(Request $request)
    {
        parse_str($request['formdata'], $formdata);

        $validator = Validator::make($formdata, [
            'name' => 'required',
            'contact_number' => 'required',
            'email' => 'required',
            'address' => 'required',
            'zip_code' => 'required',
            'city' => 'required',

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

}
