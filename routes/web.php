<?php

use App\Http\Controllers\order_management\NewsController;
use App\Http\Controllers\order_management\OrderController;
use Illuminate\Support\Facades\Route;
use App\Http\Controllers\UserController;

Route::get('/', function () {
    return view('order_management.layout');
});


Route::post('/auth/save',[UserController::class, 'save']) -> name('auth.save');
Route::post('/auth/check',[UserController::class, 'check']) -> name('auth.check');
Route::get('/auth/forgetPassword',[UserController::class, 'forgetPassword']) -> name('auth.forgetPassword');
Route::post('/auth/forgetPassword',[UserController::class, 'sendResetLink']) -> name('auth.sendResetLink');
Route::get('/auth/resetPassword/(token)',[UserController::class, 'resetPassword']) -> name('auth.resetPassword');
Route::post('/auth/resetPassword',[UserController::class, 'resetPassword']) -> name('auth.resetPassword');
Route::get('/auth/profile',[UserController::class, 'profile']) -> name('auth.profile');
//Route::get('/auth/logout',[UserController::class, 'logout']) -> name('auth.logout');

Route::group(['middleware' => ['AuthCheck']], function(){
    Route::get('/auth/register',[UserController::class, 'register']) -> name('auth.register');
    Route::get('/auth/login',[UserController::class, 'login']) -> name('auth.login');
});

Route::get('/home', function () {
    return view('home');
});

Route::get('/home', function () {
    return view('home');
});



//Route::resource('/news',NewsController::class);
Route::post('/get_news_list', [NewsController::class, 'getNewsList']);
Route::post('/get_order_list', [OrderController::class, 'getOrderList']);
//Route::resource('/orders',OrderController::class);


Route::resources([
    'news' => NewsController::class,
    'orders' => OrderController::class,
]);
