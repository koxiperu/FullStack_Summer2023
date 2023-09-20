<?php

use Illuminate\Support\Facades\Route;
use App\Models\Listing;

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
Route::get('/', function () {
    return view('listings', [
        'listings' => Listing::all(),
    ]);
});

// Single listing
// Route::get('/listings/{id}', function ($id) {
//     // call the method in a variable
//     $listing = Listing::find($id);

//     if ($listing){ // if listing exists
//         return view('listing', [
//             'listing' => $listing
//         ]);
//     } else { // if listing doesn't exist
//         abort('404'); // show "error 404" page
//     }
// });

// Route model binding
// An even better way of doing the route above
// We can pass {listing} directly to the view and it will handle eveything for us
// (finding the listing, throwing 404 when needed, etc...)
Route::get('/listings/{listing}', function(Listing $listing){
    return view('listing', [
        'listing' => $listing
    ]);
});