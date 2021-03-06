<?php

use Illuminate\Support\Facades\Route;
use App\Http\Controllers\ArticlesController;
use App\Http\Controllers\WelcomeController;
use App\Http\Controllers\LangController;
use App\Http\Controllers\AgirController;

use App\Models\Article;


Route::get('/', [WelcomeController::class,'index'])->name('welcome');

Route::get('/recherche', [ArticlesController::class,'index'])->name('search');
Route::get('/recherche-filter', [ArticlesController::class,'search'])->name('searchfilters');

Route::get('/article/{id}', [ArticlesController::class,'show'])->name('show');

Route::get('/agir-ensemble', [AgirController::class,'index'])->name('agir');

/* require __DIR__.'/auth.php'; */

/* Auth::routes(); */
/* 
Route::get('/home', [App\Http\Controllers\HomeController::class, 'index'])->name('home'); */


Route::get('locale', [LangController::class,'getLang'])->name('getlang');
Route::get('locale/{lang}', [LangController::class,'setLang'])->name('setlang');
