<?php

use Illuminate\Support\Facades\Route;


Route::get('/', function () {
    return view('welcome');
});

// Route::prefix('page')->group (function(){
//     Route::get('/about',function() {
//         return "<h1>About Page</h1>";
//     });
    
//     Route::get('/gallery',function() {
//         return "<h1>Gallery Page</h1>";
//     });
    
//     Route::get('/post/firstpost',function() {
//         return "<h1>First Post Page</h1>";
//     });
    
// });
//  Route::fallback(function(){
//     return "<h1>Page Not Found.</h1>";
//  });

// Route::get('/postsss', function () {
//     return view('post');
//  })->name('mypost');

//  Route::get('/test', function () {
//     return view('about');
//  });

// Route::redirect('/about','/test',301);

// /Route::get('page/about',function() {
//     return "<h1>About Page</h1>";
// });

// });

// Route::get('/post/{id?}/comment/{commentid?}', function (string $id = null, string $commentid = null) {
//     if($id){
//         return "<h1>Post ID : ".$id."</h1><h2>".$commentid."</h2>";
//     }
//     else{
//         return "<h1> no  id found</h1>";
//     }
   
// })->whereIn('id',['movie','draw']);