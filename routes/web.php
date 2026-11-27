<?php

use App\Http\Controllers\UserController;
use Illuminate\Support\Facades\Route;

Route::get('/', function () {
    return view('login');
});

Route::get('/register', function () {
    return view('Register');
});

Route::post("/home", [UserController::class, "Log_in"]); // first term is our controller, second is our function (named home in the UserController.php file)