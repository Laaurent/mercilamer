<?php

use Illuminate\Support\Facades\Route;
use App\Http\Controllers\ArticlesController;


Route::get('/', [ArticlesController::class,'indexThemeNews'])->name('welcome');

Route::get('/dashboard', function () {
    return view('dashboard');
})->middleware(['auth'])->name('dashboard');

require __DIR__.'/auth.php';

Auth::routes();

Route::get('/home', [App\Http\Controllers\HomeController::class, 'index'])->name('home');
