<?php

use Illuminate\Http\Request;
use Illuminate\Support\Facades\Route;

//@6API ROUTES*
/*
Route::get('/posts', function(){
    return response()->json ([
        'posts' => [
            [
                'title' => 'Post One'
            ]
        ]
    ]);
});
*/

Route::get('/user', function (Request $request) {
    return $request->user();
})->middleware('auth:sanctum');
