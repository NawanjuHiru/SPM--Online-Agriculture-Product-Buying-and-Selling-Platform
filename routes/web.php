<?php

use App\Http\Controllers\order_management\OrderController;
use Illuminate\Support\Facades\Route;
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

Route::get('/', function () {
    return view('order_management.layout');
});


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

Route::group(['middleware' => ['AuthCheck']], function(){
    Route::get('/auth/register',[UserController::class, 'register']) -> name('auth.register');
    Route::get('/auth/login',[UserController::class, 'login']) -> name('auth.login');
});

Route::get('/auth/adminlogin',[AdminController::class, 'adminlogin']) -> name('auth.adminlogin');
Route::get('/auth/adminlogout',[AdminController::class, 'adminperform'])->name('logout.adminperform');



// -----------------------------------------------Order management routes start -------------------------------------------------
Route::get('/userlayout', function () {
    return view('order_management.layout');
});
Route::get('/', function () {
    return view('home');
});
Route::get('/adminlayout', function () {
});

Route::get('/userhome', function () {
    return view('userhome');
});
Route::get('/review', function () {
    $data=App\Models\Reviewrating::all();
    return view('review_management.review')->with('reviewratings', $data);
});
Route::get('/admin', function () {
    return view('Admin.layout');
});
Route::get('/cashondelivery', function () {
    return view('order_management.cash_on_delivery');
});

Route::resources(['carts' => ShoppingCartController::class,]);
Route::resources(['orders' => OrderController::class,]);
Route::resources(['adminorders' => AdminOrderController::class,]);
Route::post('/get_order_list', [AdminOrderController::class, 'getOrderList']);
Route::get('/order/create/{id}',[OrderController::class, 'createOrder']);
Route::post('/retrieve_order', [OrderController::class, 'retrieveOrder']);


Route::post('/review', [reviewController::class, 'store']);

Route::get('/delivery', function () {
    return view('delivery_management.delivery');
});

Route::post('/delivery', [deliveryController::class, 'store']);

Route::get('/refund', function () {
    return view('refund_management.refund');
});

Route::post('/refund', [refundController::class, 'store']);

Route::get('/aboutus', function () {
    return view('aboutUs.aboutUs');
});

Route::get('/contactus', function () {
    return view('contactUs.contactUs');
});

Route::post('/contactus', [contactusController::class, 'store']);

//Route::resource('/news',NewsController::class);
//Route::post('/get_news_list', [NewsController::class, 'getNewsList']);
//Route::post('/get_order_list', [OrderController::class, 'getOrderList']);

// Route::post('/get_order_list', [OrderController::class, 'getOrderList']);

//Route::resource('/orders',OrderController::class);


Route::resources([
    'news' => NewsController::class,
    'orders' => OrderController::class,
    'users' => UserController::class,
]);

Route::get('/admin/review', function () {
    $data=App\Models\Reviewrating::all();
    return view('admin.review')->with('reviewratings', $data);
});

Route::get('/delete/{id}', [reviewController::class, 'delete']);

Route::get('/admin/delivery', function () {
    $data=App\Models\Delivery::all();
    return view('admin.delivery')->with('deliveries', $data);
});

Route::get('/delete-delivery/{id}', [deliveryController::class, 'delete']);
Route::get('/edit-delivery/{id}', [deliveryController::class, 'edit']);
Route::post('/editdelivery', [deliveryController::class, 'update']);

Route::get('/download_Pdf', [deliveryController::class, 'downloadPdf']);
Route::post('/get_cart', [ShoppingCartController::class, 'getCart']);
Route::get('stripe', [StripeController::class, 'stripe']);
Route::post('stripe', [StripeController::class, 'stripePost'])->name('stripe.post');
Route::get('/orderReport', [AdminOrderController::class, 'orderReport']);


// -----------------------------------------------Order management routes end -------------------------------------------------
