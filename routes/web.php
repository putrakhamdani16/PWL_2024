<?php

use Illuminate\Support\Facades\Route;

use App\Http\Controllers\WelcomeController;

Route::get('/hello', [WelcomeController::class,'hello']); 

Route::get('/world', function () { 
    return 'World'; 
});

Route::get('/', function () { 
    return 'Selamat Datang'; 
});

Route::get('/about', function () { 
    return '2241720180 & Nanda Putra Khamdani'; 
});

Route::get('/user/{name}', function ($name) { 
    return 'Nama saya '.$name; 
}); 

Route::get('/posts/{post}/comments/{comment}', function 
($postId, $commentId) { 
return 'Pos ke-'.$postId." Komentar ke-: ".$commentId; 
}); 

Route::get('/articles/{id}', function ($id) { 
    return 'Halaman Artikel dengan ID  '.$id; 
});

Route::get('/user/{name?}', function ($name='John') { 
    return 'Nama saya '.$name; 
}); 