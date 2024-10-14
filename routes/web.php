<?php

use App\Http\Controllers\Auth\RegisterController;
use App\Http\Controllers\Auth\LoginController;
use App\Http\Controllers\Home\HomeController;
use App\Http\Controllers\Post\PostController;
use Illuminate\Support\Facades\Auth;
use Illuminate\Support\Facades\Route;

//Auth
Route::get('/', [RegisterController::class, 'showRegisterForm'])->name('register');
Route::post('/register', [RegisterController::class, 'register'])->name('register.submit');
Route::get('/logout', function () {
    Auth::logout();
    return redirect('/');
})->name('logout');

//Login
Route::get('/login', [LoginController::class, 'showLogin'])->name('login');
Route::post('/login', [LoginController::class, 'login'])->name('login.submit');

//Home
Route::get('/home', [HomeController::class,  'index'])->name('home')->middleware('auth');

//Posts

Route::get('/posts', [PostController::class, 'showCreate'])->name('posts.create.show')->middleware('auth');
Route::post('/posts', [PostController::class, 'create'])->name('posts.create')->middleware('auth');
