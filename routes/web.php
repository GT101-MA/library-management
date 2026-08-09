<?php

use Illuminate\Support\Facades\Route;

Route::get('/', function () {
    return 'Zdravo Tibore!';
});

Route::get('/about', function () {
    return 'Ovo je about stranica';
});

Route::get('/kontakt', function () {
    return 'Kontaktirajte nas!';
});

Route::get('/service', function () {
    return 'Naše usluge';
});

Route::get('/blog', function () {
    return 'Dobro došli na blog';
});