<?php

use App\Http\Controllers\PageController;
use Illuminate\Support\Facades\Route;

Route::get('/', [PageController::class, 'home'])->name('home');
Route::get('/users', [PageController::class, 'users'])->name('users');
Route::post('/store', [PageController::class, 'store'])->name('store');
Route::get('/addUser', [PageController::class, 'addUser'])->name('addUser');
Route::get('/updateUser/{id}', [PageController::class, 'updateUser'])->name('updateUser');
Route::delete('/users/{id}', [PageController::class, 'destroy'])->name('destroy');
Route::put('/users/{id}', [PageController::class, 'update'])->name('update');
