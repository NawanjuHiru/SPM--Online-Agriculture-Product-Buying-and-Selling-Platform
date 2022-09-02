<?php

use Illuminate\Support\Facades\Route;
use App\Http\Controllers\UserController;

Route::get('/', function () {
    return view('welcome');
});

Route::post('/auth/save',[UserController::class, 'save']) -> name('auth.save');
Route::post('/auth/check',[UserController::class, 'check']) -> name('auth.check');
Route::get('/auth/logout',[UserController::class, 'logout']) -> name('auth.logout');

Route::group(['middleware' => ['AuthCheck']], function(){
    Route::get('/auth/register',[UserController::class, 'register']) -> name('auth.register');
    Route::get('/auth/login',[UserController::class, 'login']) -> name('auth.login');
    Route::get('/auth/forgetPassword',[UserController::class, 'forgetPassword']) -> name('auth.forgetPassword');
});

Route::get('/home', function () {
    return view('home');
});