<?php

use Illuminate\Support\Facades\Route;
use App\Http\Controllers\ArticleController;

Auth::routes();

Route::get('/', [ArticleController::class, 'getAllArticles'])->name('articles');
Route::view('/about', 'pages.about')->name('about');
Route::view('/contacts', 'pages.contacts')->name('contacts');
Route::get('/articles/{slug}', [ArticleController::class, 'getArticle'])->name('article');
