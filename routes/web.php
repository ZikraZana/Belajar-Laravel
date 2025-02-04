<?php

use Illuminate\Support\Facades\Route;

// Home
Route::get('/', function () {
    return view('home');
});

// Blog
Route::get('/blog', function () {
    return view('blog');
});

// Contact
Route::get('/contact', function () {
    return view('contact');
});

// About
Route::get('/about', function () {
    return view('about');
});