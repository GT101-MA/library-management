<?php

use Illuminate\Support\Facades\Route;
use App\Http\Controllers\PageController;
use App\Http\Controllers\BookController;


Route::get('/', [PageController::class, 'home']);

Route::get('/about', [PageController::class, 'about']);

Route::get('/contact', [PageController::class, 'contact']);

Route::get('/books', [BookController::class, 'index'])
       ->name('books.index');

Route::get('/books/create', [BookController::class, 'create'])
       ->name('books.create');

Route::get('/service', function () {
    return 'Our Serivices';
});

Route::get('/blog', function () {
    return 'Welcome to the blog';
});

Route::post('/books', [BookController::class, 'store'])
       ->name('books.store');

Route::get('/books/{id}', [BookController::class, 'show'])
       ->name('books.show');