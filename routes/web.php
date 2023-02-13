<?php

use Illuminate\Support\Facades\Route;
use App\Http\Controllers\AuthController;
use App\Http\Controllers\AdminController;
use App\Http\Controllers\UserController;

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

Auth::routes([
    // 'register'=>FALSE
]);
Route::get('/', function () {
    return view('auth/login');
});

Route::group(['prefix'=>'admin', 'middleware'=>'isAdmin', 'auth'], function(){
    Route::get('dashboard', [AdminController::class, 'index'])->name('admin.dashboard');
});

Route::group(['prefix'=>'user', 'middleware'=>'isUser', 'auth'], function(){
    Route::get('dashboard', [UserController::class, 'index'])->name('user.dashboard');
});

Route::get('/home', [App\Http\Controllers\HomeController::class, 'index'])->name('home');
