<?php

use Illuminate\Support\Facades\Route;

Route::get('/', function () {
    return view('home');
});

Route::get('/about', function () {
    return view('about');
});

Route::get('/contact', function () {
    return view('contact');
});

Route::get('/service', function () {
    return 'Our Serivices';
});

Route::get('/blog', function () {
    return 'Welcome to the blog';
});

Route::get('/books', function () {
    return view('books');
});