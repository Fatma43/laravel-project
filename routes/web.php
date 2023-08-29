<?php

use Illuminate\Support\Facades\Route;
use App\Http\Controllers\UserController;
use App\Http\Controllers\OrderController;
use App\Http\Controllers\ProductController;

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


Route::get('/', function () {
    return view('welcome');
})->name("welcome");

/////////////////////////profile//////////////////////
Route::delete('/product/{id}',[OrderController::class,'destroy'])->name('deleteorder');
Route::get('/profile',[UserController::class,'profile'])->name('profile');

/////////////////////////login/////////////////////////
Route::get('/log', function () {
    return view('user.login');
});

Route::post('/check',[UserController::class,'check'] )->name('check');

/////////////////////////signup/////////////////////////
Route::get('/sign', function () {
    return view('user.signup');
})->name('signup');

Route::post('/user/signup',[UserController::class,'store'])->name('sign');

///////////////////////crud///////////////////////////
Route::get('/product',[ProductController::class,'index'])->name('index');
Route::get('show/{id}',[ProductController::class,'show'])->name('show');
Route::delete('/product/delete/{id}',[ProductController::class,'destroy'])->name('delete');
Route::get('/product/update/{id}',[ProductController::class,'update'])->name('update');
Route::put('/product/edit/{id}',[ProductController::class,'edit'])->name('edit');
Route::get('/product/create',[ProductController::class,'create'])->name('create');
Route::post('/product/store',[ProductController::class,'store'])->name('store');

///////////////////////home//////////////////////////
Route::get('/home',[ProductController::class,'home'])->name('home');
Route::get('/home/{id}',[UserController::class,'add'])->name('buy');

Route::get('/user/show/{id}',[UserController::class,'usershow'])->name('usershow');


