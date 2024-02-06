<?php

use App\Http\Controllers\ListingController;
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
Route::get('/', [ListingController::class, 'index']);

// Single Listing
Route::get('/listings/{listing}', [ListingController::class, 'show']);

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