<?php

use Illuminate\Support\Facades\Route;

use App\Http\Controllers\HomeController;
use App\Http\Controllers\UserController;
use App\Http\Controllers\EventController;

Route::get('/', [HomeController::class, 'index'])->name('home');

Route::get('/users', [UserController::class, 'index']);
Route::get('/users/{user}', [UserController::class, 'show'])->name('users.show');
Route::get('/events', [EventController::class, 'index']);
Route::get('/events/{event}', [EventController::class, 'show'])->name('events.show');


