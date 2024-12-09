<?php

use Illuminate\Support\Facades\Route;

use App\Http\Controllers\BookController;

Route::get('/', [BookController::class, 'index'])->name('books.index');
Route::get('/create', [BookController::class, 'create'])->name('books.create');
Route::post('/', [BookController::class, 'store'])->name('books.store');
Route::delete('/{book}', [BookController::class, 'destroy'])->name('books.destroy');
