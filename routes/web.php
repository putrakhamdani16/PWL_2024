<?php

use App\Http\Controllers\PageController;
use Illuminate\Support\Facades\Route;

use App\Http\Controllers\WelcomeController;

Route::get('/hello', [WelcomeController::class,'hello']); 

Route::get('/world', function () { 
    return 'World'; 
});

Route::get('/index', [PageController::class,'index']);

Route::get('/about', [PageController::class,'about']);

Route::get('/user/{name}', function ($name) { 
    return 'Nama saya '.$name; 
}); 

Route::get('/posts/{post}/comments/{comment}', function 
($postId, $commentId) { 
return 'Pos ke-'.$postId." Komentar ke-: ".$commentId; 
}); 

Route::get('/articles/{id}', [PageController::class,'articles']);

Route::get('/user/{name?}', function ($name='John') { 
    return 'Nama saya '.$name; 
}); 