<?php

use App\Models\Listing;
use Faker\Provider\Lorem;
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

// All Listings
Route::get('/', function () {
    // Data can be passed as the second parameter of View.
    return view('listings',  [
        'heading' => 'Latest Listings',
        'listings' => Listing::all()
    ]);
});

// Single Listing
Route::get('/listings/{id}', function ($id) {
    return view('listing', [
        'listing' => Listing::find($id)
    ]);
});

/*
    Route::get('/user/{id}', function($id){
        return response("<h1>Hello world from user $id</h1>", 200)
            ->header('Content-Type','text/html')
            ->header('meHeaderDa','text/plain');
    })-> where('id', '[0-7]+');

    use Illuminate\Http\Request;
    Route::get('/search', function(Request $req) {
        print_r($req->name);
        print_r($req->id);
    });
*/