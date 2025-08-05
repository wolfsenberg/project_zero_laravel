<?php

use App\Http\Controllers\ListingController;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\Route;
use App\Models\Listing;

//@1ROUTING & RESPONSES*

//All Listing
Route::get('/', [ListingController::class, 'index']);

//Show create form
Route::get('/listings/create', [ListingController::class, 'create']);

//Store Listing
Route::post('/listings', [ListingController::class, 'store']);


//Show edit form
Route::get('/listings/{listing}/edit', [ListingController::class, 'edit']);

//Update listing
Route::put('/listings/{listing}', [ListingController::class, 'update']);

//Delete listing
Route::delete('/listings/{listing}', [ListingController::class, 'destroy']);


//Single Listing
Route::get('/listings/{listing}', [ListingController::class, 'show']);



// Common Resource Routes:
// index - Show all listings
// show - Show single listing
// create - Show form to create new listing
// store - Store new listing
// edit - Show form to edit listing
// update - Update listing
// destroy - Delete listing


/*
Route::get('/hello', function () {
    return response('<h1>Hello world</h1>', 200)
    ->header('Content-Type', 'text/plain')
    ->header('foo', 'bar');
});

//@2WILDCARD ENDPOINTS*
Route::get('/posts/{id}', function ($id){
    //@4DIE DUMP HELPERS*
   // ddd($id); debug
    return response('Post ' . $id);
//@3ROUTE CONSTRAINTS*
})-> where ('id', '[0-9]+');


//@5REQUEST & QUERY PARAMS*
Route::get('/search', function(Request $request) {
    return($request->name . ' ' . $request->city);
});
*/
