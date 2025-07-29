<?php

use Illuminate\Http\Request;
use Illuminate\Support\Facades\Route;
use App\Models\Listing;

//@1ROUTING & RESPONSES*

//All Listing
Route::get('/', function () {
    return view('listings', [
        'heading' => 'Latest Listings',
        'listings' => Listing ::all()
    ]);
});


//Single Listing
Route::get('/listings/{id}', function($id) {
    return view('listing', [
        'listing' => Listing::find($id)
    ]);
});








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

