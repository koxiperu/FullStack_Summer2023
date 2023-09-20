<?php

use App\Http\Controllers\ProductController;
use App\Http\Controllers\UserController;
use Illuminate\Support\Facades\Route;

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

Route::get('/', [ProductController::class, 'index']);
Route::get('/categories/{category}', [ProductController::class,'categorize']);
Route::get('/products/create', [ProductController::class, 'create'])->middleware('auth');
Route::post('/products', [ProductController::class, 'store'])->middleware('auth');
Route::get('/products/{product}/edit', [ProductController::class, 'edit'])->middleware('auth');
Route::put('/products/{product}', [ProductController::class, 'update'])->middleware('auth');
Route::delete('/products/{product}', [ProductController:: class, 'destroy'])->middleware('auth');
Route::get('/products/manage',[ProductController::class, 'manage'])->middleware('auth');
Route::get('/cart/{product}',[ProductController::class, 'addcart'])->middleware('auth');
Route::delete('/cart/{product}', [ProductController:: class, 'deletecart'])->middleware('auth');
Route::get('/cart',[ProductController::class, 'cart'])->middleware('auth');
Route::get('/products/{product}',
 [ProductController::class, 'show']);

Route::get('/register', [UserController::class, 'create'])->middleware('guest');
Route::get('/users/{user}/edit',[UserController::class, 'edit'])->middleware('auth');
Route::put('/users/{user}',[UserController::class, 'update'])->middleware('auth');
Route::post('/users',[UserController::class, 'store']);
Route::post('/logout',[UserController::class, 'logout'])->middleware('auth');
Route::get('/login', [UserController::class, 'login'])->name('login')->middleware('guest');
Route::post('/users/authorise',[UserController::class, 'authorise']);