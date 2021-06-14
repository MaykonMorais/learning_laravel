<?php

use App\Http\Controllers\BlogController;
use App\Http\Controllers\CategoryController;
use App\Http\Controllers\ContatoController;
use App\Http\Controllers\Site\HomeController;
use Illuminate\Support\Facades\Route;

Route::name('Site')->group(function() {
    Route::get('/', HomeController::class, 'index');

    Route::get('produtos', [CategoryController::class, 'index']); 
    Route::get('produtos/{slug}', [CategoryController::class, 'show']);

    Route::get('blog', BlogController::class, 'index'); /** invokable */

    Route::view('sobre', 'site.about.index');

    Route::get('contato', [ContatoController::class, 'index']);
    Route::post('contato', [ContatoController::class, 'form']);
});