<?php

use Illuminate\Support\Facades\Route;
use App\Http\Controllers\IndexController;
use App\Http\Controllers\PostNewsController;
use App\Http\Controllers\UserController;
use App\Http\Controllers\CategoryController;
use App\Http\Controllers\LoginController;
use App\Http\Controllers\CoverArtistController;
use App\Http\Controllers\EditNewUserController;
use App\Http\Controllers\RegisterController;
use App\Http\Controllers\LandingController;
use App\Http\Controllers\CopywriteController;
use App\Http\Controllers\ContentController;
use App\Models\CoverArtist;

/*
|--------------------------------------------------------------------------
| Web Routes
|--------------------------------------------------------------------------
|
| Here is where you can register web Routes for your application. These
| Routes are loaded by the RouteServiceProvider and all of them will
| be assigned to the "web" middleware group. Make something great!
|
*/

//Route::get('/',[IndexController::class,'index']);
Route::get('/',[PostNewsController::class,'index']);
//Route::get('/artistpage',[CoverArtistController::class,'show']);
Route::get('/index',[PostNewsController::class,'index']);
Route::get('/profile',[IndexController::class,'profile']);
Route::get('/product',[IndexController::class,'product']);
Route::get('/produk',[IndexController::class,'produk']);
Route::get('/admin',[IndexController::class,'admin']);
Route::get('/user',[UserController::class,'index']);
Route::get('/categoryindex',[CategoryController::class,'index']);
Route::get('/register',[UserController::class,'register']);
Route::get('/login',[LoginController::class,'index']);
Route::post('/login-check', [LoginController::class, 'authenticate']);
Route::post('/logout', [LoginController::class, 'logout']);
Route::resource('/artistpage',\App\Http\Controllers\CoverArtistController::class);
Route::resource('/members',\App\Http\Controllers\MemberController::class);
Route::resource('/promotions',\App\Http\Controllers\LandingController::class);
Route::resource('/registermusic',\App\Http\Controllers\RegisterController::class);




Route::group(["middleware"=>["auth"]],function(){
Route::resource('/users',\App\Http\Controllers\UserController::class);
Route::resource('/artist',\App\Http\Controllers\AgregatorController::class);
Route::resource('/member',\App\Http\Controllers\AgregatorMemberController::class);
Route::resource('/album',\App\Http\Controllers\AlbumController::class);
Route::resource('/coverArtist',\App\Http\Controllers\CoverArtistController::class);
Route::resource('/category',\App\Http\Controllers\CategoryController::class);
Route::resource('/post',\App\Http\Controllers\PostController::class);
Route::resource('/products',\App\Http\Controllers\ProductController::class);
Route::resource('/copy-writes',\App\Http\Controllers\CopywriteController::class);
Route::resource('/contents',\App\Http\Controllers\ContentController::class);
Route::resource('/testimonials',\App\Http\Controllers\TestimonialController::class);
Route::resource('/inject',\App\Http\Controllers\CopyWriteExtraController::class);
Route::resource('/searchs',\App\Http\Controllers\SearchController::class);
Route::resource('/banners',\App\Http\Controllers\BannerController::class);
});


