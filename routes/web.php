<?php

use App\Http\Controllers\UserController;
use App\Http\Controllers\ChatController;
use App\Http\Controllers\RegisterController;
use Illuminate\Support\Facades\Route;


Route::get('/register', [RegisterController::class, 'register'])->name('register');
Route::get('/', [UserController::class, 'login'])->name('login');
Route::get('/profile', [UserController::class, 'profile'])->name('profile');

Route::get('/chat', [ChatController::class, 'index'])->name('chat');