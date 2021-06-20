<?php

use Illuminate\Support\Facades\Route;
use App\Http\Controllers\ArticlesController;
use App\Http\Controllers\WelcomeController;
use App\Http\Controllers\LangController;


Route::get('/', [WelcomeController::class,'index'])->name('welcome');

Route::get('/recherche', [ArticlesController::class,'index'])->name('search');

/* require __DIR__.'/auth.php'; */

/* Auth::routes(); */
/* 
Route::get('/home', [App\Http\Controllers\HomeController::class, 'index'])->name('home'); */


Route::get('locale', [LangController::class,'getLang'])->name('getlang');
Route::get('locale/{lang}', [LangController::class,'setLang'])->name('setlang');
