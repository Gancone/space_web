<?php

use App\Http\Controllers\ArticleController;
use App\Http\Controllers\PublicController;
use App\Http\Controllers\RevisorController;
use Illuminate\Support\Facades\Route;

Route::get('/', [PublicController::class, 'homepage'])->name('homepage');

Route::middleware(['auth'])->group(function () {
    Route::get('/dashboard', [PublicController::class, 'dashboard'])->name('dashboard');
    Route::get('/article/create', [ArticleController::class, 'create'])->name('create.article');
    Route::get('revisor/index', [RevisorController::class, 'index'])->name('revisor.index');
    Route::patch('/accept/{article}', [RevisorController::class, 'accept'])->name('accept');
    Route::patch('/reject/{article}', [RevisorController::class, 'reject'])->name('reject');

    Route::get('/revisor/request', [RevisorController::class, 'becomeRevisor'])->name('become.revisor');
    Route::get('/make/revisor/{user}', [RevisorController::class, 'makeRevisor'])->name('make.revisor');
});

Route::get('/article/index', [ArticleController::class, 'index'])->name('article.index');
Route::get('/show/article/{article}', [ArticleController::class, 'show'])->name('article.show');
Route::get('/category/{category}', [ArticleController::class, 'byCategory'])->name('byCategory'); //nel name si inserisce il nome della vista 
