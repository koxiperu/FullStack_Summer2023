<?php

use App\Models\Listing;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\Route;
use App\Http\Controllers\UserController;
use App\Http\Controllers\ListingController;

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

Route::get('/', [ListingController::class, 'index']);

// Route::get('/listings/{id}', function($id){
//     //call the method in a variable
//     // $list=Listing::find($id);
//     // if ($list){
//     //     return view('listing', [
//     //     'listing' => $list
//     // ]);
//     // }else {
//     //     abort('404');
//     // }    
// });
//show listing form
//But checking if we are logged in when calling the route - middleware('auth). If we are, we will see post job form, if not - we will se login page
Route::get('/listings/create', [ListingController::class, 'create'])->middleware('auth');

//create new listing
Route::post('/listings', [ListingController::class, 'store'])->middleware('auth');
// show edit form
Route::get('/listings/{listing}/edit', [ListingController::class, 'edit'])->middleware('auth');
Route::put('/listings/{listing}', [ListingController::class, 'update'])->middleware('auth');
//delete listing
Route::delete('/listings/{listing}', [ListingController::class, 'destroy'])->middleware('auth');
//manage listings
Route::get('/listings/manage', [ListingController::class, 'manage'])->middleware('auth');
//again middleware to prevent guests accessing this page
//single listing
Route::get('/listings/{list}', [ListingController::class, 'show']);
//now instead of using the route to call the Model and the view we just use the ListingController


//naming conventions:
// - index - shaw all listings
// - show - show one listing
// - create = show form to create new listing
// - store = store new listing in the DB(on form submit)
// - edit = show form to edit listing
// - update = update listing in DB (on edit form submit)
// - destroy = delete listing in DB
// -scopeFilter = for filtering

//show register form
Route::get('/register', [UserController::class, 'create'])->middleware('guest');
//middleware() checks if we are logged in and prevent
//create new user
Route::post('/users', [UserController::class, 'store']);
//Log user out
Route::post('/logout', [UserController::class, 'logout'])->middleware('auth');
//

//show login form
Route::get('/login', [UserController::class, 'login'])->name('login')->middleware('guest');
//log user in
Route::post('/users/authenticate', [UserController::class, 'authenticate']);

//