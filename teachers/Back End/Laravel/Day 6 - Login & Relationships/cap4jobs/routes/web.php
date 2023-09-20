<?php

use Illuminate\Support\Facades\Route;
use App\Http\Controllers\UserController;
use App\Http\Controllers\ListingController;
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

// All listings
Route::get('/', [ListingController::class, 'index']);

// Create listing form
Route::get('/listings/create', [ListingController::class, 'create'])->middleware('auth');
// middleware('auth') checks if we are logged in when calling the route
// if we are, we'll see the post job form, otherwise we'll see the login page

// Store new listing
Route::post('/listings', [ListingController::class, 'store'])->middleware('auth');

// Show edit form
Route::get('/listings/{listing}/edit', [ListingController::class, 'edit'])->middleware('auth');

// Update listing
Route::put('/listings/{listing}', [ListingController::class, 'update'])->middleware('auth');

// Delete listing
Route::delete('/listings/{listing}', [ListingController::class, 'destroy'])->middleware('auth');

// Manage listings
Route::get('/listings/manage', [ListingController::class, 'manage'])->middleware('auth');
// again auth middleware to prevent guests accessing this page

// Single listing
Route::get('/listings/{listing}', [ListingController::class, 'show']);

// Show register form
Route::get('/register', [UserController::class, 'create'])->middleware('guest');
// middleware('guest') checks if we are logged in and prevents 

// Create new user
Route::post('/users', [UserController::class, 'store']);

// Log user out
Route::post('/logout', [UserController::class, 'logout'])->middleware('auth');

// Show login form
Route::get('/login', [UserController::class, 'login'])->name('login')->middleware('guest');

// Log user in
Route::post('/users/authenticate', [UserController::class, 'authenticate']);




// Now instead of using the route to call the Model and the View,
// we just use the ListingController

/* Naming conventions
- index = show all listings
- show = show one listing
- create = show form to create new listing
- store = store new listing in the DB (on create form submit)
- edit = show form to edit listing
- update = update listing in DB (on edit form submit)
- destroy = delete listing in DB
*/