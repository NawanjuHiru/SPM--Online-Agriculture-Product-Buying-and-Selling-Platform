<?php

namespace App\Http\Controllers\order_management;

use App\Http\Controllers\Controller;
use App\Models\order_management\ShoppingCart;
use Illuminate\Http\Request;
use Yajra\DataTables\DataTables;

class ShoppingCartController extends Controller
{
    /**
     * Display a listing of the resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function index()
    {
        $data = ShoppingCart::all();
        return view('order_management.shopping_cart')->with('cart_details', $data);
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
     * @param \Illuminate\Http\Request $request
     * @return \Illuminate\Http\Response
     */
    public function store(Request $request)
    {
        //
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
     * @return \Illuminate\Http\Response
     */
    public function edit($id)
    {
        //
    }

    /**
     * Update the specified resource in storage.
     *
     * @param \Illuminate\Http\Request $request
     * @param int $id
     * @return \Illuminate\Http\Response
     */
    public function update(Request $request, $id)
    {
        //
    }

    /**
     * Remove the specified resource from storage.
     *
     * @param int $id
     * @return \Illuminate\Http\Response
     */
    public function destroy($id)
    {
        //
    }

    public function getCart(Request $request)
    {
        $cart = ShoppingCart::with('product')->where('status', '0')->get();
        return DataTables::of($cart)
            ->addColumn('image', function ($cart) {
                return '<img src="' . asset($cart->product->product_image ?? '') . '" width="50px" height="50px"></img>';
            })
            ->addColumn('product', function ($cart) {
                return $cart->product->product_name ?? '';
            })
            ->addColumn('price', function ($cart) {
                return number_format($cart->product->product_price, 2) ?? '';
            })
            ->addColumn('action', function ($cart) {
                return '<a class="btn btn-success btn-sm btn_checkout" href="' . url('/order/create/' . $cart->product->product_id) . '">Checkout</a>';
            })
            ->rawColumns(['action', 'image'])
            ->make();
    }
}
