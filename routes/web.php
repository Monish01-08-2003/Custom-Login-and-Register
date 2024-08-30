<?php

use App\Http\Controllers\LoginController;
use App\Http\Controllers\mainController;
use App\Http\Controllers\RegisterController;
use Illuminate\Support\Facades\Route;

Route::get('/login', [LoginController::class, 'index'])->name('login');
Route::get('/register', [RegisterController::class, 'index'])->name('register');
Route::post('/registerValidate', [RegisterController::class, 'registerValidate'])->name('registerValidate');
Route::get('/', [mainController::class, 'index'])->name('home');
Route::post('/loginValidate', [LoginController::class, 'loginValidate'])->name('loginValidate');
Route::get('/logout', [mainController::class, 'logout'])->name('logout');
