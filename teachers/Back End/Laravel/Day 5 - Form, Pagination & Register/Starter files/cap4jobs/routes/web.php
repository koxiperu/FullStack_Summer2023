<?php

use Illuminate\Support\Facades\Route;
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
Route::get('/listings/create', [ListingController::class, 'create']);

// Store new listing
Route::post('/listings', [ListingController::class, 'store']);









// Single listing
Route::get('/listings/{listing}', [ListingController::class, 'show']);


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