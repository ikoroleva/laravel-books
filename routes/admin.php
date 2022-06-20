<?php

use Illuminate\Support\Facades\Route;
use App\Http\Controllers\Admin\AuthorController;

Route::get('/admin/authors', [AuthorController::class, 'index'])->name('authors');
