<?php

use Illuminate\Support\Facades\Route;

// Home
Route::get('/', function () {
    return view('home', ['title' => 'Home Gweh']);
});

// Blog
Route::get('/blog', function () {
    return view('blog', ['title' => 'Ini Blog']);
});

// Contact
Route::get('/contact', function () {
    return view('contact', ['title' => 'Ini Contact']);
});

// About
Route::get('/about', function () {
    return view('about', ['title' => 'Ini About']);
});