<?php

use Illuminate\Support\Facades\Route;
use App\Http\Controllers\AboutController;
use App\Http\Controllers\Admin\AuthorController;
use App\Models\Book;
use App\Http\Controllers\Admin\BookController;
use App\Http\Controllers\ReviewController;
use App\Http\Controllers\BookshopController;



/*
|--------------------------------------------------------------------------
| Web Routes
|--------------------------------------------------------------------------
|
| Here is where you can register web routes for your application. These
| routes are loaded by the RouteServiceProvider within a group which
| contains the "web" middleware group. Now create something great!
|
*/

Route::get('/', function () {

    // if (\Gate::allows('admin')) {
    //     return 'The user is Admin!';
    // }

    $books = \App\Models\Book::orderBy('title')->limit(10)->get();

    $books->load('authors');

    return view('index/index', compact('books'));
})->name('homepage');

Route::get('/about-us', [AboutController::class, 'aboutUs'])->name('about-us')->middleware('auth');

//routes for books from user

Route::get('/books/{book_id}', [BookController::class, 'show'])->name('books.show');
Route::post('/books/{book_id}/reviews', [ReviewController::class, 'store'])->name('reviews.store');

//routes for bookshops

Route::get('/bookshops', [BookshopController::class, 'index'])->name('bookshops');
Route::get('/bookshops/{bookshops_id}', [BookshopController::class, 'show'])->name('bookshops.show');


Route::group(['middleware' => 'can:admin'], function () {

    Route::delete('/reviews/{review_id}', [ReviewController::class, 'delete'])->name('reviews.delete');
});
