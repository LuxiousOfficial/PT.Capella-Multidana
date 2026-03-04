<?php

use App\Http\Controllers\ActionController;
use App\Http\Controllers\AuthController;
use App\Http\Controllers\LoanController;
use Illuminate\Support\Facades\Route;

Route::get('/', [AuthController::class, 'login'])->middleware('guest');
Route::post('/', [AuthController::class, 'authenticate']);
Route::post('/logout', [AuthController::class, 'logout']);

Route::get('/registration', [AuthController::class, 'registration']);
Route::post('/registration', [AuthController::class, 'store']);

Route::resource('/user/loan', LoanController::class)->middleware('auth');

Route::patch('/user/loan{loan}/approve', [ActionController::class, 'approve'])->name('loan/approve');
Route::patch('/user/loan{loan}/reject', [ActionController::class, 'reject'])->name('loan/reject');

// Route::patch('/user/{id}/approve', [ActionController::class, 'approve'])->name('loan/approve');
// Route::patch('/user/{id}/reject', [ActionController::class, 'reject'])->name('loan/reject');

