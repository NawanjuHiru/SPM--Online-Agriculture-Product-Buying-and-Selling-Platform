<?php

use App\Http\Controllers\order_management\NewsController;
use App\Http\Controllers\order_management\OrderController;
use Illuminate\Support\Facades\Route;


Route::get('/', function () {
    return view('order_management.layout');
});

Route::get('/home', function () {
    return view('home');
});

Route::get('/review', function () {
    return view('review_management.review');
});

Route::get('/delivery', function () {
    return view('delivery_management.delivery');
});

Route::get('/refund', function () {
    return view('refund_management.refund');
});

//Route::resource('/news',NewsController::class);
Route::post('/get_news_list', [NewsController::class, 'getNewsList']);
Route::post('/get_order_list', [OrderController::class, 'getOrderList']);
//Route::resource('/orders',OrderController::class);


Route::resources([
    'news' => NewsController::class,
    'orders' => OrderController::class,
]);
