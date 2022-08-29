<?php

use App\Http\Controllers\TagController;
use Illuminate\Support\Facades\Auth;
use Illuminate\Support\Facades\Route;
use App\Http\Controllers\ArticleController;
use App\Http\Controllers\ContactController;

Auth::routes();

Route::get('/', [ArticleController::class, 'index'])->name('articles.index');
Route::resource('articles', ArticleController::class)->except('index');
Route::get('/taggable/{id}', [TagController::class, 'getArticlesByTag'])->name('taggable.index');

Route::view('/about', 'pages.about')->name('abouts.index');
Route::view('/contacts', 'pages.contact.create_contact')->name('contacts.create');
Route::post('/contacts',  [ContactController::class, 'storeContact'])->name('contacts.store');
Route::get('/admin/feedback', [ContactController::class, 'getAllFeedbacks'])->name('feedbacks.index');


