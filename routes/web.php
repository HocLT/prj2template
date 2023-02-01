<?php

use Illuminate\Support\Facades\Route;
use App\Http\Controllers\LoginController;
use App\Http\Controllers\Admin\UserController;
use App\Http\Controllers\Admin\HomeController;
use App\Http\Controllers\Admin\ProductController;

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

Route::get('/login', [LoginController::class, 'index'])->name('login');

Route::post('/login', [LoginController::class, 'login'])->name('checkLogin');

Route::get('/logout', [LoginController::class, 'logout'])->name('logout');

Route::group(['middleware'=>'canLogin'], function() {
    // cần login mới truy cập
    
    
    Route::group(['middleware'=>'canAdmin', 'prefix'=> 'admin', 'as' => 'admin.'], function() {
        // cần admin mới truy cập
        Route::get('/', [HomeController::class, 'index'])->name('home');

        Route::resource('/user', UserController::class);

        Route::resource('/product', ProductController::class);
    });
        
});

