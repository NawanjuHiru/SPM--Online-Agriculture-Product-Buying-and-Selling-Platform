<?php

use Illuminate\Support\Facades\Route;
use App\Http\Controllers\product_management\productController;
use App\Http\Controllers\product_management\adminproductController;
/*
|--------------------------------------------------------------------------
| Web Routes
|--------------------------------------------------------------------------
|
| Here is where you can register web routes for your application. These
| routes are loaded by the RouteServiceProvider within a group which
| contains the "web" middleware group. Now create something great!
|
*/

Route::get('/product', function () {
    return view('product_management.layout');
});

Route::get('/', function () {
    return view('home');
});

//Route::post('/addProduct', [productController::class, 'create']);

// Route::get('/insertProduct', function () {
//     return view('product_management.insertproduct');
// });

// Route::resources([
//      'products' => productController::class,
//  ]);

Route::get('/product/create', function () {
    return view('product_management.insertproduct');
});

Route::post('/product/insert',[productController::class,'save'])->name('insert.product');

Route::get('/product/fetch',[productController::class,'fetchProducts'])->name('fetch.products');

Route::post('/get_product_list', [productController::class, 'getProductList']);

Route::post('/get_adminproduct_list', [adminproductController::class, 'getProductList']);

Route::get('/products/view', [productController::class, 'show']);

//to save edited data
Route::post('/product/update/{product_id}',[productController::class,'updateProduct']);

//get the product edit form page
Route::get('/products/update{product_id}/edit',[productController::class,'edit']);

//to delete a product data
Route::get('/product/delete{product_id}/delete',[productController::class,'deleteProduct']);

//get the product edit form page in admin side
Route::get('/adminproducts/update{product_id}/edit',[adminproductController::class,'edit']);

//to delete a product data in admin side
Route::get('/adminproduct/delete{product_id}/delete',[adminproductController::class,'deleteProduct']);

//to save edited data in admin side
Route::post('/adminproduct/update/{product_id}',[adminproductController::class,'updateProduct']);


//view available product list
Route::get('/product/list', function () {
    return view('product_management.viewproductlist');
});

Route::get('/product/success', function () {
    return view('product_management.success');
});

//retrive my products table
Route::get('/product/view', function () {
    return view('product_management.retrieveproducts');
});

//admin side product list view
Route::get('/productlist/view', function () {
    return view('Admin.productlist');
});


Route::get('/productReport', [adminproductController::class, 'productReport']);

