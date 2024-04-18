<?php

use App\Http\Controllers\AccountController;
use App\Http\Controllers\ArticleController;
use App\Http\Controllers\PageController;
use Illuminate\Support\Facades\Route;

Route::get('/', function () {
    return view('welcome');
})->name('welcome');

Route::get('/articoli', [PageController::class, 'articles'])->name('public.articles');
Route::get('/articoli/{article}', [PageController::class, 'articlesView'])->name('public.articles.view');

Route::get('/account', [AccountController::class, 'index'])->name('account.index');

Route::prefix('account')->middleware('auth')->group(function () {

    Route::resource('articles', ArticleController::class);

});