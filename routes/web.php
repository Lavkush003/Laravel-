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
// Route::get('/post/{id?}', function (?string $id = null) {
//     if ($id !== null) {
//         return "<h1>Post ID: " . $id . "</h1>";
//     } else {
//         return "<h1>No ID Found</h1>";
//     }
// })->where('id', '[a-zA-Z]*');

// Route::get('/about', function (){
//     return view('about');
// });



//Laravel Group Route
Route::prefix('page')->group(function(){
    Route::get('/about',function(){
        return "<h1>About PAge</h1>";

    });

    Route::get('/gallery',function(){
        return "<h1>Gallery Page</h1>";

    });
    Route::get('/post/firstpost',function(){
        return "<h1>First Post Page</h1>";
    });
});


Route::fallback(function(){
return "<h1>Page Not Found.</h1>";
});