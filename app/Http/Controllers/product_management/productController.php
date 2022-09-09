<?php

namespace App\Http\Controllers\product_management;

use App\Http\Controllers\Controller;
use App\Models\product_management\productModel;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\DB;
use Illuminate\Support\Facades\Validator;

class productController extends Controller
{

    public function index()
    {

        // $data=productModel::all();
        // return view('product_management.retrieve', compact('data'));

    }

    public function create(Request $request)
    {
        // $product = new productModel;

        // //validation
        // $validatedata = $request -> validate([
        //     'proname' => 'required',
        //     'procategory' => 'required',
        //     'proprice' => 'required|numeric',
        //     'prodesc' => '',
        // ]);

        // //inserting data
        // $product -> product_name = $request -> proname;
        // $product -> category = $request -> procategory;
        // $product -> product_price = $request -> proprice;
        // $product -> product_desc = $request -> prodesc;
        // $product -> save();

        // //echo "Data inserted Successfully";
        // echo '<script>alert("Data added successfully!!")</script>';

        return view('product_management.insertproduct');


    }

    public function save(Request $request)
    {
        $validator = Validator::make($request->all(),[
            'proname' => 'required',
            'procategory' => 'required',
            'proprice' => 'required',
            'prodesc' => '',
            'image' => 'required|image',
        ],[
            'proname.required' =>  'Product name is required',
            'procategory.required' => 'Product category is required',
            'proprice.required' => 'Product price is required',

            'image.required' => 'Image is required',
            'image.image' => 'Image must be an image',

        ]);

        if(!$validator->passes()){
            //return response()->json(['code'=>0,'error'=>$validator->errors()->toArray()]);
            return response()->Json(['status' => 'error', 'msg' => 'validation failed']);
        }else{
            $path = "files/";
            $file = $request->file('image');
            $filename = time().'_'.$file->getClientOriginalName();

           // $upload = $file->storeAs($path, $filename);
            $upload = $file->storeAs($path, $filename,'public');

            if($upload){
                productModel::insert([
                    'product_name'=>$request->proname,
                    'category'=>$request->procategory,
                    'product_price'=>$request->proprice,
                    'product_desc'=>$request->prodesc,
                    'product_image'=>$filename,

                ]);
                //return response()->Json(['status' => 'success', 'msg' => 'Added successfully']);
                return view('product_management.success');
            }

            //return response()->Json(['status' => 'success', 'msg' => 'Added successfully']);

        }

    }




    //fetch all products function
    public function fetchProducts(){
        $products = productModel::all();
        $data = \View::make('product_management.productlist')->with('products', $products)->render();
        return response()->json(['code'=>1,'result'=>$data]);
    }



}
