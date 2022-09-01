<?php

use Illuminate\Support\Facades\Route;
use App\Http\Controllers\UserController\UserController;


Route::get('/', function () {
    return view('welcome');
});


/* 
Router::post('/auth/save',[UserController::class, 'save']) -> name('auth.save');
Router::post('/auth/check',[UserController::class, 'check']) -> name('auth.check');
Router::get('/auth/logout',[UserController::class, 'logout']) -> name('auth.logout');

Route::group(['middleware' => ['AuthCheck']], function(){
    Route::get('/auth/login',[UserController::class, 'login']) -> name('auth.login');
    Router::get('/auth/register',[UserController::class, 'register']) -> name('auth.register');
    Router::get('/auth/forgetPassword',[UserController::class, 'forgetPassword']) -> name('auth.forgetPassword');
}); */

Route::get('/home', function () {
    return view('home');
});

