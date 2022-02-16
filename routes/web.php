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

Route::get('/',[MainController::class,'home_page'])->name('home');
Route::get('/add_client',[MainController::class,'add_client']);
Route::get('/about_client',[MainController::class,'about_client']);
Route::get('/login', [AuthController::class, 'login'])->name('login');
Route::get('/register', [AuthController::class, 'register'])->name('register');
Route::post('/reg_user', [AuthController::class, 'reg_user']);
Route::post('/sign', [AuthController::class, 'sign']);

// Только авторизованные проходят через эти роуты middleware.
Route::middleware('guest')->group(function () {
    Route::get('/exit', [AuthController::class, 'exit']);
});
//  end