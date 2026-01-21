<?php

use App\Http\Controllers\UserController;
use Illuminate\Support\Facades\Route;

Route::get('/', function () {
    return view('welcome');
});

Route::get('users', [UserController::class, 'index'])->name('users.index');
Route::get('bills', [UserController::class, 'bills'])->name('bills.index');
Route::get('/create', [UserController::class, 'create'])->name('bills.create');
Route::post('/store', [UserController::class, 'store'])->name('users.store');
Route::get('/edit/{id}', [UserController::class, 'edit'])->name('users.edit');
Route::post('/update/{id}', [UserController::class, 'update'])->name('users.update');
Route::get('/delete/{id}', [UserController::class, 'delete'])->name('users.delete');