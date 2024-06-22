<?php

use Illuminate\Support\Facades\Route;
use App\Http\Controllers\DasboardController;
use App\Http\Controllers\AuthController;

Route::get('/', [DasboardController::class, 'index'])->name('index');


Route::get('signin', [AuthController::class, 'signin'])->name('signin');
Route::get('signup', [AuthController::class, 'signup'])->name('signup');
