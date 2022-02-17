<?php

use App\Http\Controllers\MainController;
use App\Http\Controllers\AuthController;
use Illuminate\Support\Facades\Route;

Route::middleware('auth')->group(function () {
    Route::get('/home', [MainController::class, 'home_page'])->name('home');
    Route::get('/add_client', [MainController::class, 'add_client']);
    Route::post('/add_client', [MainController::class, 'add_client_post']);
    Route::get('/about_client/{id}', [MainController::class, 'about_client'])->name('about_client');
    Route::get('/exit',[AuthController::class, 'exit']);
});

Route::middleware('guest')->group(function () {
    Route::get('/', [AuthController::class, 'login'])->name('login');
    Route::post('/login', [AuthController::class, 'login_process']);
    Route::get('/register', [AuthController::class, 'register']);
    Route::post('/register', [AuthController::class, 'register_process']);
});