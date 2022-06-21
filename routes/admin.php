<?php

use Illuminate\Support\Facades\Route;
use App\Http\Controllers\Admin\AuthorController;
use App\Http\Controllers\Admin\BookController;
use App\Http\Controllers\ReviewController;

//authors

Route::get('/admin/authors', [AuthorController::class, 'index'])->name('authors');
Route::get('/admin/authors/create', [AuthorController::class, 'create'])->name('authors.create');
Route::post('/admin/authors', [AuthorController::class, 'store'])->name('authors.store');

//books
Route::get('/admin/books', [BookController::class, 'index'])->name('books');
Route::get('/admin/books/{book_id}', [BookController::class, 'show'])->name('books.show');

Route::post('/admin/books/{book_id}/review', [ReviewController::class, 'store'])->name('review.store');
