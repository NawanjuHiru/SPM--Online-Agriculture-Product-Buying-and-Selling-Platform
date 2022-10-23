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
            //return $request->input();
            return response()->json(['code'=>0,'error'=>$validator->errors()->toArray()]);
            //return response()->Json(['status' => 'error', 'msg' => 'validation failed']);
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


    //get products
    public function getProductList(Request $request)
    {
        $products = productModel::all();

        return DataTables::of($products)
            ->addColumn('action', function ($products) {
                return '<div>
                <a href="' . url('/products/update' . $products->product_id . '/edit') .'" class="btn btn" style="background-color:#09560D!important;color:white;width:45px" ><i class="fa fa-pencil" aria-hidden="true"></i></a>
               <a href="' . url('/product/delete' . $products->product_id . '/delete') . '" class="btn btn" style="background-color:#CF0808!important;color:white;width:45px;margin-top: 0px;"><i class="fa fa-trash" aria-hidden="true"></i></a>

           </div>  ';
            })
            ->rawColumns(['action'])
            ->make();
    }


    public function show()
    {

        $data=productModel::all();
        return view('product_management.viewproducts', compact('data'));

    }


    public function edit($product_id){

        $product = productModel::find($product_id);
        return view('product_management.editproduct') ->with ('productdata', $product);
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


}
