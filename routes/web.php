<?php

use App\Http\Controllers\AuthController;
use Illuminate\Support\Facades\Route;

Route::get('/', function () {
    return view('welcome');
});

Route::get('/homepage', function(){
    return view('homepage');
});

Route::get('/login', function(){
    return view('login.admin');
});

Route::get('/registration', [AuthController::class, 'showRegistration'])->name('registration');