<?php

use Illuminate\Support\Facades\Route;

Route::get('/hello', function () { 
    return 'Hello World'; 
});

Route::get('/world', function () { 
    return 'World'; 
});

Route::get('/', function () { 
    return 'Selamat Datang'; 
});

Route::get('/about', function () { 
    return '2241720180 & Nanda Putra Khamdani'; 
});

