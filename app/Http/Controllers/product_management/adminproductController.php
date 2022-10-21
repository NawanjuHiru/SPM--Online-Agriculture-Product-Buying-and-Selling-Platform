<?php

namespace App\Http\Controllers\product_management;

use App\Http\Controllers\Controller;
use App\Models\product_management\productModel;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\DB;
use Illuminate\Support\Facades\Validator;
use Illuminate\Support\Facades\File;
use Illuminate\Support\Facades\Storage;

use Yajra\DataTables\DataTables;
use PDF;

class adminproductController extends Controller
{


    //get products
    public function getProductList(Request $request)
    {
        $products = productModel::all();

        return DataTables::of($products)
            ->addColumn('action', function ($products) {
                return '<div>

               <a href="' . url('/adminproducts/update' . $products->product_id . '/edit') . '" class="btn btn" style="background-color:#09560D!important;color:white;" ><i class="fa fa-pencil-square-o" aria-hidden="true"></i></a>
               <a href="' . url('/adminproduct/delete' . $products->product_id . '/delete') . '" class="btn btn" style="background-color:#CF0808!important;color:white;width:45px;margin-top: 0px;"><i class="fa fa-trash" aria-hidden="true"></i></a>

           </div>  ';
            })
            ->rawColumns(['action'])
            ->make();
    }


    public function edit($product_id){

        $product = productModel::find($product_id);
        return view('Admin.admineditproduct') ->with ('productdata', $product);
    }


    public function updateProduct(Request $request, $product_id){
        $product = productModel::find($product_id);

        $product->product_name = $request->input('proname');
        $product->category = $request->input('procategory');
        $product->product_price = $request->input('proprice');
        $product->product_desc = $request->input('prodesc');

        // if($request ->hasfile('image'))
        // {
        //     $destination = 'files/'.$product->product_image;

        //     if(File::exsists($destination))
        //     {
        //         File::delete($destination);
        //     }

            $path = "files/";
            $file = $request->file('image');
            //$extension = $file->getClientOriginalExtension();
            $filename = time().'_'.$file->getClientOriginalName();
            $file->storeAs($path, $filename,'public');
            $product->product_image = $filename;


        $product->update();
        return view('product_management.success');


}


    public function deleteProduct($product_id){
        $product = productModel::find($product_id);



    // $path = "files/";
    //         $file = $request->file('image');
    //         //$extension = $file->getClientOriginalExtension();
    //         $filename = time().'_'.$file->getClientOriginalName();
    //         $file->delete($path, $filename,'public');
    //         $product->product_image = $filename;
        $product->delete();
        return redirect()->back()->with('status', 'Product deleted successfully');
}

public function productReport(){

    $product_details = productModel::all();
    $pdf = PDF::loadView('Admin.productreport',compact('product_details'));
    return $pdf->download('Product Report.pdf');
}

}
