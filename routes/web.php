<?php

use Illuminate\Support\Facades\Route;
use App\Http\Controllers\CategoyController;
use App\Http\Controllers\ProductController;
use App\Http\Controllers\photoContoller;
use App\Http\Controllers\newPhotoController;


  
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


Route::resource('category', CategoyController::class);

Route::resource('product', ProductController::class);

Route::resource('photo', newPhotoController::class);


    // Route::get('uploadshow',[photoContoller::class,'show']);
Route::get('upload',[photoContoller::class,'create']);
Route::post('upload',[photoContoller::class,'store']);

// Route::resource('productabc', ProductController::class);
// //   


