<?php

use App\Http\Controllers\ProfileController;
use App\Http\Controllers\PostController;
use Illuminate\Support\Facades\Route;


Route::get('/home', [PostController::class, 'loadPosts'])->middleware(['auth', 'verified'])->name('home');
Route::get('/', [PostController::class, 'loadPosts'])->middleware(['auth', 'verified'])->name('home');

Route::middleware('auth')->group(function () {
    Route::put('/profile', [ProfileController::class, 'updateTheme'])->name('profile.updateTheme');
    Route::get('/profile', [ProfileController::class, 'edit'])->name('profile.edit');
    Route::patch('/profile', [ProfileController::class, 'update'])->name('profile.update');
    Route::delete('/profile', [ProfileController::class, 'destroy'])->name('profile.destroy');
});

require __DIR__.'/auth.php';
