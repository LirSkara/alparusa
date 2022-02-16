<?php

use App\Http\Controllers\MainController;
use App\Http\Controllers\AuthController;
use Illuminate\Support\Facades\Route;

/*
|--------------------------------------------------------------------------
| Web Routes
|--------------------------------------------------------------------------
|
| Here is where you can register web routes for your application. These
| routes are loaded by the RouteServiceProvider within a group which
| contains the "web" middleware group. Now create something great!
|
*/


// Регистрация и авторизация start 
Route::middleware('auth')->group(function () {
    Route::get('/exit', [AuthController::class, 'exit']);
    Route::get('/home',[MainController::class,'home_page'])->name('home');
    Route::get('/add_client',[MainController::class,'add_client']);
    Route::post('/add_client',[MainController::class,'add_client_post']);
});

Route::middleware('guest')->group(function () {
    Route::get('/', [AuthController::class, 'login'])->name('login');
    Route::post('/login', [AuthController::class, 'login_process']);
    Route::get('/register', [AuthController::class, 'register']);
    Route::post('/register', [AuthController::class, 'register_process']);
});
// Регистрация и авторизация end