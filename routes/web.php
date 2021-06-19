<?php

use Illuminate\Support\Facades\Route;
use App\Http\Controllers\ArticlesController;


Route::get('/', [ArticlesController::class,'indexThemeNews'])->name('welcome');

Route::get('/recherche', [ArticlesController::class,'index'])->name('search');

require __DIR__.'/auth.php';

Auth::routes();

Route::get('/home', [App\Http\Controllers\HomeController::class, 'index'])->name('home');
