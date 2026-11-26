<?php

use Illuminate\Support\Facades\Route;

Route::get('/', function () {
    return view('register');
});

Route::get('/login', function () {
    return view('login');
});

Route::get("/home", function () { // change this to a POST function when u fix the login/register
    return view('home');
});