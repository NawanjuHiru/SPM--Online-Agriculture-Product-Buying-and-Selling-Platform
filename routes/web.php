<?php

use App\Http\Controllers\order_management\OrderController;
use App\Http\Controllers\order_management\ShoppingCartController;
use App\Http\Controllers\order_management\StripeController;
use App\Http\Controllers\order_management\AdminOrderController;
use Illuminate\Support\Facades\Route;


// -----------------------------------------------Order management routes start -------------------------------------------------
Route::get('/userlayout', function () {
    return view('order_management.layout');
});
Route::get('/', function () {
    return view('home');
});
Route::get('/adminlayout', function () {
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

Route::post('/get_cart', [ShoppingCartController::class, 'getCart']);
Route::get('stripe', [StripeController::class, 'stripe']);
Route::post('stripe', [StripeController::class, 'stripePost'])->name('stripe.post');
Route::get('/orderReport', [AdminOrderController::class, 'orderReport']);


// -----------------------------------------------Order management routes end -------------------------------------------------
