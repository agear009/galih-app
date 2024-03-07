<?php

use Illuminate\Support\Facades\Route;
use App\Http\Controllers\IndexController;
use App\Http\Controllers\UserController;
use App\Http\Controllers\CategoryController;

/*
|--------------------------------------------------------------------------
| Web Routes
|--------------------------------------------------------------------------
|
| Here is where you can register web routes for your application. These
| routes are loaded by the RouteServiceProvider and all of them will
| be assigned to the "web" middleware group. Make something great!
|
*/

Route::get('/',[IndexController::class,'Index']);
Route::get('/profile',[IndexController::class,'Profile']);
route::get('/product',[IndexController::class,'Product']);
route::get('/produk',[IndexController::class,'Produk']);
route::get('/admin',[IndexController::class,'Admin']);
route::get('/user',[UserController::class,'Index']);
route::get('/categoryindex',[CategoryController::class,'Index']);
route::get('/register',[UserController::class,'Register']);
route::resource('/users',\App\Http\Controllers\UserController::class);
route::resource('/category',\App\Http\Controllers\CategoryController::class);
route::resource('/products',\App\Http\Controllers\ProductController::class);

