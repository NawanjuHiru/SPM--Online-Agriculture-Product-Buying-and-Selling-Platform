<?php

namespace App\Http\Controllers;

use App\Models\product_management\productModel;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\DB;

class productController extends Controller
{
    // public function create(Request $request)
    // {
    //     $product = new productModel;

    //     //validation
    //     $validatedata = $request -> validate([
    //         'proname' => 'required',
    //         'procategory' => 'required',
    //         'proprice' => 'required|numeric',
    //         'prodesc' => 'required',
    //     ]);

    //     //inserting data
    //     $product -> product_name = $request -> proname;
    //     $product -> category = $request -> procategory;
    //     $product -> product_price = $request -> proprice;
    //     $product -> product_desc = $request -> prodesc;
    //     $product -> save();

    //     echo "Data inserted Successfully";

    // }
}
