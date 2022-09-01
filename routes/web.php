<?php

use Illuminate\Support\Facades\Route;
use App\Http\Controllers\UserController\UserController;

/*
|--------------------------------------------------------------------------
| Web Routes
|--------------------------------------------------------------------------
|
| Here is where you can register web routes for your application. These
| routes are loaded by the RouteServiceProvider within a group which
| contains the "web" middleware group. Now create something great!
|
*/

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