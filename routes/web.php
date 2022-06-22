<?php

use Illuminate\Support\Facades\Route;
use App\Http\Controllers\AboutController;
use App\Http\Controllers\Admin\AuthorController;
use App\Models\Book;


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


//Route::get('/admin/authors', [AuthorController::class, 'index'])->name('authors');
