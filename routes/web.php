<?php

use App\Http\Controllers\order_management\NewsController;
use App\Http\Controllers\order_management\OrderController;
use App\Http\Controllers\reviewController;
use App\Http\Controllers\contactusController;
use App\Http\Controllers\deliveryController;
use App\Http\Controllers\refundController;
use Illuminate\Support\Facades\Route;
use App\Http\Controllers\order_management\ShoppingCartController;
use App\Http\Controllers\order_management\StripeController;


Route::get('/vgnv', function () {
    return view('order_management.layout');
});

Route::get('/', function () {
    return view('home');
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

Route::post('/get_order_list', [OrderController::class, 'getOrderList']);

//Route::resource('/orders',OrderController::class);
Route::resources([
    'orders' => OrderController::class,
]);
Route::get('/order/create/{id}',[OrderController::class, 'createOrder']);
Route::post('/retrieve_order', [OrderController::class, 'retrieveOrder']);


Route::resources([
    'carts' => ShoppingCartController::class,
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

Route::get('/downloadPdf', [OrderController::class, 'downloadPdf']);
