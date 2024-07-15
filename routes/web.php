<?php

use App\Http\Controllers\ArticleController;
use App\Http\Controllers\PublicController;
use Illuminate\Support\Facades\Route;

Route::get('/', [PublicController::class, 'homepage'])->name('homepage');

Route::middleware(['auth'])->group(function () {
    Route::get('/dashboard', [PublicController::class, 'dashboard'])->name('dashboard');
    Route::get('/article/create', [ArticleController::class, 'create'])->name('article.create');
});
