<?php

//this file will contain all the routes for administraton interface

use Illuminate\Support\Facades\Route;
use App\Http\Controllers\Admin\AuthorController;
use App\Http\Controllers\Admin\BookController;
use App\Http\Controllers\ReviewController;
use App\Http\Controllers\AdminController;
use App\Http\Controllers\Admin\UserController;



//

Route::get('/admin', [AdminController::class, 'index'])->middleware('can:admin')->name('admin.home');



//authors


Route::group(['middleware' => 'can:admin'], function () {

    Route::get('/users', [UserController::class, 'index']);

    Route::get('/authors', [AuthorController::class, 'index'])->name('authors');
    Route::get('/authors/create', [AuthorController::class, 'create'])->name('authors.create');
    Route::post('authors', [AuthorController::class, 'store'])->name('authors.store');

    //books
    Route::get('/books', [BookController::class, 'index'])->name('books');
    Route::get('/books/{book_id}', [BookController::class, 'show'])->name('books.show');

    //Route::post('/books/{book_id}/review', [ReviewController::class, 'store'])->name('review.store');


});
