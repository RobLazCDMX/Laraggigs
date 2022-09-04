<?php

use Illuminate\Http\Request;
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
    return view('listings', [
        'heading' => 'Latest Listings',
        'listings' => [
            [
                'id' => 1,
                'title' => 'Listing One',
                'description' => 'Here is where you can register web routes for your application. These
                | routes are loaded by the RouteServiceProvider within a group which
                | contains the "web" middleware group. Now create something great!'
            ],
            [
                'id' => 2,
                'title' => 'Listing Two',
                'description' => 'Two Here is where you can register web routes for your application. These
                | routes are loaded by the RouteServiceProvider within a group which
                | contains the "web" middleware group. Now create something great!'
            ]
        ]
    ]);
});

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