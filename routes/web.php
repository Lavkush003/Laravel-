<?php

use Illuminate\Support\Facades\Route;

Route::get('/', function () {
    return view('welcome');
});

 Route::get('/post', function (){
    return view('post');
});

// Route::view('/post', 'post');

// Route::get('/post/firstpost', function(){
//     return view('firstpost');
//});

//Route Parameters
Route::get('/post/{id?}', function (?string $id = null) {
    if ($id !== null) {
        return "<h1>Post ID: " . $id . "</h1>";
    } else {
        return "<h1>No ID Found</h1>";
    }
})->where('id', '[a-zA-Z]*');