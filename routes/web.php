<?php

use Illuminate\Support\Facades\Auth;
use Illuminate\Support\Facades\Route;
use App\Http\Controllers\ArticleController;
use App\Http\Controllers\ContactController;

Auth::routes();

Route::get('/', [ArticleController::class, 'getAllArticles'])->name('articles');
Route::view('/about', 'pages.about')->name('about');

Route::prefix('articles')->group(function () {
    Route::get('/{slug}', [ArticleController::class, 'getArticle'])->name('article');
    Route::view('articles/create', 'pages.create_article')->name('add-article');
    Route::post('articles/create', [ArticleController::class, 'storeArticle'])->name('store-article');
});

Route::view('/contacts', 'pages.create_contact')->name('contacts');
Route::post('/contacts',  [ContactController::class, 'storeContact'])->name('store-contact');
Route::get('/admin/feedback', [ContactController::class, 'getAllFeedbacks'])->name('feedbacks');


