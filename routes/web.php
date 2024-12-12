<?php

use App\Http\Controllers\UserController;
use App\Http\Controllers\ChatController;
use Illuminate\Support\Facades\Route;

Route::get('/register', [UserController::class, 'register'])->name('register');
Route::post('/register', [UserController::class, 'registerAction'])->name('registerAction');

Route::get('/', [UserController::class, 'login'])->name('login');
Route::post('/login', [UserController::class, 'loginAction'])->name('loginAction');
Route::post('/logout', [UserController::class, 'logout'])->name('logout');

Route::get('/profile', [UserController::class, 'profile'])->name('profile');

Route::get('/chat', [ChatController::class, 'index'])->name('chat');