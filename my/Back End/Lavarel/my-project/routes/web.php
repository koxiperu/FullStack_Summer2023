<?php

use App\Models\Listing;
use Illuminate\Http\Request;
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

Route::get('/', function () {
    return view('listings',[
        'heading'=>'Latest listings', //we can pass data to the view like this
        'listings'=> Listing::all()
    ]);
});

Route::get('/listings/{id}', function($id){
    return view('listing', [
        'listing' => Listing::find($id)
    ]);
});

Route::get('/hello', function(){
    return 'Hello, Cats!';
});

Route::get('/post{id}', function($id){ //wildcard
    //debugging helpers
   // dd($id); //die and dump
    ///ddd($id); //die, dump, debug
    return("This is my id in the url: $id");
})->where('id', '[0-9]+'); //if only digits


// /search?city=luxembourg
//1st way:
Route::get('/search', function(Request $request){
    dd($request->city);
});
//2nd way
Route::get('/search', function(){
    dd(request('city'));
});

