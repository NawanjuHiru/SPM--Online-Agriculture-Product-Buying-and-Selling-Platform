<?php

use Illuminate\Support\Facades\Route;
use App\Http\Controllers\product_management\productController;
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

Route::get('/products/view', [productController::class, 'show']) ;

Route::get('/product/list', function () {
    return view('product_management.viewproductlist');
});

Route::get('/product/success', function () {
    return view('product_management.success');
});

Route::get('/product/view', function () {
    return view('product_management.retrieveproducts');
});


