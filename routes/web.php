<?php

use Illuminate\Support\Facades\Route;
use App\Http\Controllers\BookController;
use App\Http\Controllers\CategoryController;
use App\Http\Controllers\MemberController;
use App\Http\Controllers\DashboardController;

Route::get('/', [DashboardController::class, 'index']);
Route::get('/dashboard', [DashboardController::class, 'index']);

Route::resource('books', BookController::class);

Route::get('/categories', [CategoryController::class, 'index']);
Route::get('/members', [MemberController::class, 'index']);
Route::get('/members/{id}', [MemberController::class, 'show']);