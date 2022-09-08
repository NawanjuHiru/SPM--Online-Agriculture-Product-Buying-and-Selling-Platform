<?php

use App\Http\Controllers\order_management\NewsController;
use App\Http\Controllers\order_management\OrderController;
use App\Http\Controllers\reviewController;
use Illuminate\Support\Facades\Route;


Route::get('/', function () {
    return view('home');
});

Route::get('/review', function () {
    $data=App\Models\Reviewrating::all();
    return view('review_management.review')->with('reviewratings', $data);
});

Route::post('/review', [reviewController::class, 'store']);

Route::get('/delivery', function () {
    return view('delivery_management.delivery');
});

Route::get('/refund', function () {
    return view('refund_management.refund');
});

Route::get('/aboutus', function () {
    return view('aboutUs.aboutUs');
});

Route::get('/contactus', function () {
    return view('contactUs.contactUs');
});

//Route::resource('/news',NewsController::class);
Route::post('/get_news_list', [NewsController::class, 'getNewsList']);
Route::post('/get_order_list', [OrderController::class, 'getOrderList']);
//Route::resource('/orders',OrderController::class);


Route::resources([
    'news' => NewsController::class,
    'orders' => OrderController::class,
]);
