<?php

use App\Http\Controllers\BlogController;
use App\Http\Controllers\CategoryController;
use App\Http\Controllers\ContatoController;
use App\Http\Controllers\Site\HomeController;
use Illuminate\Support\Facades\Route;

Route::get('/', HomeController::class, 'index')->name('site.home');

Route::get('produtos', [CategoryController::class, 'index'])->name('site.products'); 
Route::get('produtos/{slug}', [CategoryController::class, 'show'])->name('site.products.category');

Route::get('blog', BlogController::class, 'index')->name('site.blog'); /** invokable */

Route::view('sobre', 'site.about.index')->name('site.about');

Route::get('contato', [ContatoController::class, 'index'])->name('site.contact');
Route::post('contato', [ContatoController::class, 'form'])->name('site.contact.form');



