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
//All listings
Route::get('/', function () {
    return view('listings', [
        "header" => "lokesh",
        "listings" => Listing::all()
    ]);
});

//Single Listings

Route::get("/listing/{listing}", function (Listing $listing) {
    return view("listing", ["listing" => $listing]);
});


Route::get("/helo", function () {
    return response("<h1>Hello World</h1>", 200)
        ->header("Content-Type", "text/plain");
});

Route::get("/param/{id}", function ($id) {
    return response($id . " " . "id");
})->where("id", "[0-9]+");
