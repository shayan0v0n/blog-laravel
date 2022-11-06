<?php

use App\Http\Controllers\AdminController;
use App\Http\Controllers\ArticlesController;
use Illuminate\Support\Facades\Auth;
use Illuminate\Support\Facades\Route;

Route::get('/', function () {
    return redirect('/articles');
});

Route::prefix('articles')->group(function() {
    Route::get('/', [ArticlesController::class, 'getArticles']);
    Route::get('/{slug}', [ArticlesController::class, 'getArticle']);
});

Route::prefix('admin')->group(function() {
    Route::get('/', [AdminController::class, 'getArticles']);

    Route::post('/create', [AdminController::class, 'postCreateArticle']);
    Route::get('/create', [AdminController::class, 'getCreateArticle']);
    
    Route::put('/update/{id}', [AdminController::class, 'putUpdateArticle']);
    Route::get('/update/{slug}', [AdminController::class, 'getUpdateArticle']);

    Route::get('/{slug}', [AdminController::class, 'getArticle']);
    Route::delete('/delete/{id}', [AdminController::class, 'deleteArticle']);
});

Auth::routes();