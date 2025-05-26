<?php

use App\Http\Controllers\UserController;
use Illuminate\Support\Facades\Route;

Route::get('/login', function () {
    return view('login');
});
    
Route::get('/register', function () {
    return view('register');
});

Route::get('/resetpassword', function () {
    return view('resetpassword');
});



Route::post('/register', [UserController::class, 'register']);

Route::post('/resetpassword', [UserController::class, 'adminResetPassword']);

Route::post('/welcome_page', [UserController::class, 'login']);


