<?php

use App\Http\Controllers\order_management\NewsController;
use App\Http\Controllers\order_management\OrderController;
use App\Http\Controllers\order_management\ShoppingCartController;
use App\Http\Controllers\order_management\StripeController;
use Illuminate\Support\Facades\Route;


Route::get('/vgnv', function () {
    return view('order_management.layout');
});

Route::get('/', function () {
    return view('home');
});

Route::get('/admin', function () {
    return view('Admin.layout');
});

Route::get('/cashondelivery', function () {
    return view('order_management.cash_on_delivery');
});



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
Route::post('/get_cart', [ShoppingCartController::class, 'getCart']);

Route::get('stripe', [StripeController::class, 'stripe']);
Route::post('stripe', [StripeController::class, 'stripePost'])->name('stripe.post');

Route::get('/downloadPdf', [OrderController::class, 'downloadPdf']);
