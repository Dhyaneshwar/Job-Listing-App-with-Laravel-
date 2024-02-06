<?php

namespace App\Http\Controllers;

use App\Models\Listing;
use Illuminate\Http\Request;

class ListingController extends Controller
{
    public function index() {
        // Data can be passed as the second parameter of View.
        return view('listings.index',  [
            'listings' => Listing::all()
        ]);
    }

    public function show (Listing $listing) {
        return view('listings.show', [
            'listing' => $listing
        ]);
    }
}
