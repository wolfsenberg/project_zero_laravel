<?php

use App\Models\Listing;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\Route;
use App\Http\Controllers\UserController;
use App\Http\Controllers\ListingController;


//@1ROUTING & RESPONSES*

//All Listing
Route::get('/', [ListingController::class, 'index']);

//Show create form
Route::get('/listings/create', [ListingController::class, 'create'])->middleware('auth');



//Store Listing data
Route::post('/listings', [ListingController::class, 'store'])->middleware('auth');


//Show edit form
Route::get('/listings/{listing}/edit', [ListingController::class, 'edit'])->middleware('auth');

//Update listing
Route::put('/listings/{listing}', [ListingController::class, 'update'])->middleware('auth');

//Delete listing
Route::delete('/listings/{listing}', [ListingController::class, 'destroy'])->middleware('auth');

//manage listings
Route::get('/listings/manage', [ListingController::class, 'manage'])->middleware('auth');

//Single Listing
Route::get('/listings/{listing}', [ListingController::class, 'show']);


//Show Register/Create Form
Route::get('/register', [UserController::class, 'create'])->middleware('guest');

//Create new user
Route::post('/users', [UserController::class, 'store']);


//Logout
Route::post('/logout', [UserController::class, 'logout'])->middleware('auth');

//Show login form
Route::get('/login', [UserController::class, 'login'])->name('login')->middleware('guest');

//login user
Route::post('/users/authenticate', [UserController::class, 'authenticate']);


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
