<?php

use Illuminate\Support\Facades\Route;
use App\Http\Controllers\AuthController;
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

Route::post('/Registration/form',[AuthController::class, 'RegistrationSubmit'])->name('registration');
Route::post('/Login/form',[AuthController::class, 'LoginSubmit'])->name('loginsubmit');
Route::post('/Product/add',[ProductController::class, 'ProductSubmit'])->name('addproduct');
Route::post('/Product/buy',[ProductController::class, 'buyproduct'])->name('buyproduct');

Route::get('/Product/add', function () {return view('addproduct');})->name('addproduct');
Route::get('/Registration/form', function () {return view('registration');})->name('registration');
Route::get('/Login/form', function () {return view('login');})->name('login');
Route::get('/',[ProductController::class, 'Productlist'])->name('welcome');
Route::get('/Cart',[ProductController::class, 'cart'])->name('cart');
Route::get('/Cart/{id}',[ProductController::class, 'deletecart'])->name('deletecart');
Route::get('/Products', function () {return view('product');})->name('Products');


