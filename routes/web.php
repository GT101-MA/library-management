<?php

use Illuminate\Support\Facades\Route;
use App\Http\Controllers\PageController;
use App\Http\Controllers\BookController;


Route::get('/', [PageController::class, 'home']);

Route::get('/about', [PageController::class, 'about']);

Route::get('/contact', [PageController::class, 'contact']);

Route::get('/books', [BookController::class, 'index']);

Route::get('/service', function () {
    return 'Our Serivices';
});

Route::get('/blog', function () {
    return 'Welcome to the blog';
});

