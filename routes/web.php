<?php

use App\Http\Controllers\order_management\NewsController;
use App\Http\Controllers\order_management\OrderController;
use Illuminate\Support\Facades\Route;
use App\Http\Controllers\user_management\UserController;
use App\Http\Controllers\user_management\AdminController;
use App\Http\Controllers\user_management\ProfileController;

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
Route::get('/auth/logout',[UserController::class, 'logout']) -> name('auth.logout');
Route::get('/auth/userList',[UserController::class, 'userList']) -> name('auth.userList');
Route::get('/auth/delete',[UserController::class, 'destroy'])->name('auth.destroy');
Route::get('/auth/delete/{user_id}',[UserController::class, 'destroy'])->name('auth.delete');
//Route::get('/auth/report', [UserController::class, 'report'])->name('auth.report');
Route::get('/auth/downloadPdf', [UserController::class, 'downloadPdf'])->name('auth.download');

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
    'users' => UserController::class,
]);
