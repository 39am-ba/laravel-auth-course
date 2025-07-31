<?php

use Illuminate\Support\Facades\Route;
use App\Http\Controllers\AuthController;
use App\Http\Controllers\TaskController;

Route::get('/', function () {
    return view('welcome');
})->name('home');

Route::middleware(['guest'])->group(function () {
    Route::get('/register', [AuthController::class, 'showRegister'])->name('register');
    Route::post('/register', [AuthController::class, 'register']);
    Route::get('/login', [AuthController::class, 'showLogin'])->name('login');
    Route::post('/login', [AuthController::class, 'login']);
});

Route::middleware(['auth'])->group(function () {
    Route::post('/dashboard', [TaskController::class, 'create']);
    Route::get('/dashboard', [TaskController::class, 'read']);
    Route::put('/dashboard', [TaskController::class, 'update']);
    Route::post('/deleteTask', [TaskController::class, 'delete']);
    Route::post('/logout', [AuthController::class, 'logout'])->name('logout');
    Route::get('/profile', function() {return view('profile');});
});


Route::get('/test', function() {
    return view('layouts.app');
});
