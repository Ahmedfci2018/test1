<?php

use App\Http\Controllers\HomeController;
use App\Http\Controllers\ProductController;
use App\Http\Controllers\UserController;
use Illuminate\Support\Facades\Route;

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


Route::get('/hello/{name}',[UserController::class,'hello'])->name('hello');

Route::get('/user/{id}/{name?}',[UserController::class,'user'])->name('user');
Route::post('/user/store',[UserController::class,'user'])->name('user');
Route::delete('/user/delete',[UserController::class,'user'])->name('user');

Route::controller(UserController::class)->prefix('user')->group(function(){
    Route::get('/{id}/{name?}','user')->name('user');
    Route::post('/store','user')->name('user');
    Route::delete('/delete','user')->name('user');
});

// Route::get('/welcome',function(){
//     return view('welcome');
// });

Route::get('/home/hello/welcome',[HomeController::class,'welcome']);


Route::get('/product',[ProductController::class,'getProduct']);




Route::get('/user/name',[UserController::class,'getData']);

