<?php

use App\Http\Controllers\order_management\OrderController;
use Illuminate\Support\Facades\Route;
use App\Http\Controllers\product_management\productController;
use App\Http\Controllers\product_management\adminproductController;
use App\Http\Controllers\user_management\UserController;
use App\Http\Controllers\user_management\AdminController;
use App\Http\Controllers\user_management\ProfileController;
use App\Http\Controllers\reviewController;
use App\Http\Controllers\contactusController;
use App\Http\Controllers\deliveryController;
use App\Http\Controllers\refundController;
use App\Http\Controllers\order_management\ShoppingCartController;
use App\Http\Controllers\order_management\StripeController;
use App\Http\Controllers\order_management\AdminOrderController;



//Common Routes
Route::get('/', function () {
    return view('initial_home');
});


Route::get('/home', function () {
    return view('home');
});

Route::get('/userlayout', function () {
    return view('order_management.layout');
});
Route::get('/admin', function () {
    return view('Admin.layout');
});
Route::get('/aboutus', function () {
    return view('aboutUs.aboutUs');
});
Route::get('/contactus', function () {
    return view('contactUs.contactUs');
});


//user management

Route::group(['middleware' => ['AuthCheck']], function(){
    
});

Route::get('/auth/register',[UserController::class, 'register']) -> name('auth.register');
Route::get('/auth/login',[UserController::class, 'login']) -> name('auth.login');

Route::post('/auth/save',[UserController::class, 'save']) -> name('auth.save');
Route::post('/auth/check',[UserController::class, 'check']) -> name('auth.check');
Route::get('/auth/forgetPassword', [UserController::class, 'forgetPassword'])->name('auth.forgetPassword');
Route::post('/auth/forgetPassword', [UserController::class, 'sendResetLink'])->name('auth.sendResetLink');
Route::get('/auth/resetPassword/{token}', [UserController::class, 'resetPasswordForm'])->name('auth.resetPasswordForm');
Route::post('/auth/resetPassword', [UserController::class, 'resetPassword'])->name('auth.resetPassword');
Route::get('/auth/menu',[UserController::class, 'menu']) -> name('auth.menu');
Route::get('/auth/updateUser/{user_id}', [UserController::class, 'updateUser'])->name('auth.updateUser');
Route::post('/auth/updateUser', [UserController::class, 'update'])->name('auth.update');
Route::get('/auth/edit/{user_id}', [UserController::class, 'editUser'])->name('auth.editUser');
Route::post('/auth/edit/{user_id}', [UserController::class, 'edit'])->name('auth.edit');
Route::get('/auth/logout',[UserController::class, 'logout'])->name('auth.logout');
Route::get('/auth/userList',[UserController::class, 'userList']) -> name('auth.userList');
Route::get('/auth/delete',[UserController::class, 'destroy'])->name('auth.destroy');
Route::get('/auth/delete/{user_id}',[UserController::class, 'destroy'])->name('auth.delete');
Route::get('/auth/downloadPdf', [UserController::class, 'downloadPdf'])->name('auth.download');
Route::get('/auth/search', [UserController::class, 'search'])->name('auth.search');
Route::get('/auth/adminlogin',[AdminController::class, 'adminlogin']) -> name('auth.adminlogin');
Route::get('/auth/adminlogout',[AdminController::class, 'adminperform'])->name('logout.adminperform');


//Order management
Route::resources(['carts' => ShoppingCartController::class,]);
Route::post('/get_cart', [ShoppingCartController::class, 'getCart']);
Route::resources(['orders' => OrderController::class,]);
Route::get('/order/create/{id}',[OrderController::class, 'createOrder']);
Route::post('/retrieve_order', [OrderController::class, 'retrieveOrder']);
Route::get('stripe', [StripeController::class, 'stripe']);
Route::post('stripe', [StripeController::class, 'stripePost'])->name('stripe.post');
Route::get('/orderReport', [AdminOrderController::class, 'orderReport']);
Route::resources(['adminorders' => AdminOrderController::class,]);
Route::post('/get_order_list', [AdminOrderController::class, 'getOrderList']);
Route::get('/cashondelivery', function () {
    return view('order_management.cash_on_delivery');
});



//Product management
Route::get('/product', function () {
    return view('product_management.layout');
});
Route::get('/product/list', function () {
    return view('product_management.viewproductlist');
});
Route::get('/product/create', function () {
    return view('product_management.insertproduct');
});
Route::get('/product/success', function () {
    return view('product_management.success');
});
Route::get('/product/view', function () {
    return view('product_management.retrieveproducts');
});
Route::get('/productlist/view', function () {
    return view('Admin.productlist');
});


Route::post('/product/insert',[productController::class,'save'])->name('insert.product');
Route::get('/product/fetch',[productController::class,'fetchProducts'])->name('fetch.products');
Route::post('/get_product_list', [productController::class, 'getProductList']);
Route::post('/get_adminproduct_list', [adminproductController::class, 'getProductList']);
Route::get('/products/view', [productController::class, 'show']);
Route::post('/product/update/{product_id}',[productController::class,'updateProduct']);
Route::get('/products/update{product_id}/edit',[productController::class,'edit']);
Route::get('/product/delete{product_id}/delete',[productController::class,'deleteProduct']);
Route::get('/adminproducts/update{product_id}/edit',[adminproductController::class,'edit']);
Route::get('/adminproduct/delete{product_id}/delete',[adminproductController::class,'deleteProduct']);
Route::post('/adminproduct/update/{product_id}',[adminproductController::class,'updateProduct']);
Route::get('/productReport', [adminproductController::class, 'productReport']);



//delivery management

Route::get('/admin/review', function () {
    $data=App\Models\Reviewrating::all();
    return view('admin.review')->with('reviewratings', $data);
});
Route::get('/review', function () {
    $data=App\Models\Reviewrating::all();
    return view('review_management.review')->with('reviewratings', $data);
});
Route::get('/admin/delivery', function () {
    $data=App\Models\Delivery::all();
    return view('admin.delivery')->with('deliveries', $data);
});
Route::get('/delivery', function () {
    return view('delivery_management.delivery');
});
Route::get('/refund', function () {
    return view('refund_management.refund');
});



Route::get('/delete-delivery/{id}', [deliveryController::class, 'delete']);
Route::get('/edit-delivery/{id}', [deliveryController::class, 'edit']);
Route::post('/editdelivery', [deliveryController::class, 'update']);
Route::get('/delete/{id}', [reviewController::class, 'delete']);
Route::get('/download_Pdf', [deliveryController::class, 'downloadPdf']);
Route::post('/review', [reviewController::class, 'store']);
Route::post('/delivery', [deliveryController::class, 'store']);
Route::post('/refund', [refundController::class, 'store']);
Route::post('/contactus', [contactusController::class, 'store']);
