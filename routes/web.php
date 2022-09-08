<?php

use App\Http\Controllers\ListingController;
use Illuminate\Http\Request;
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


// All Listings

// Route::get('/', function () {
//     return view('listings', [
//         'heading' => 'Latest Listings',
//         'listings' => Listing::all()
//     ]);
// });



// All Listings using a controller. You can create a controller by running in the terminal php artisan make:controller NameOfController. 1. the fn are moved to the controller


Route::get('/', [ListingController::class, 'index'] );

Route::get('/listings/{listing}', [ListingController::class, 'show'] );






// Single Listing
// Route::get('/listings/{id}', function ($id) {
//     return view('listing', [
//         'listing' => Listing::find($id)
//     ]);
// });
// Single Listing

//Long hand of checking
// Route::get('/listings/{id}', function ($id) {
    
//     $listing = Listing::find($id);

//     if($listing) {
//         return view('listing', [
//         'listing' => $listing
//         ]);
//     } else {
//         abort('404');
//     }
// });

// Using eloquent :  // when using eloquent we can use "route model binding" in order to check the url path and return a 404 or whatever we want if page don't exist rather than returning an error.

// {listing} passed in get has to match the variable passed in the function
// Route::get('/listings/{listing}', function (Listing $listing) {
//     return view('listing', [
//         'listing' => $listing
//         ]);
// });




























// Route::get('/hello', function() {
//     return response('<h1>hello world</h1>');
// });

// Route::get('/posts/{id}', function($id) {
//     return response('Post ' . $id);
// // the where limits what's being passed to only using numbers 1-9
// })->where('id', '[0-9]+');

// //In order to access request passed in the path of url e.g. utm
// Route::get('/search', function(Request $request) {
//     dd($request);
// });