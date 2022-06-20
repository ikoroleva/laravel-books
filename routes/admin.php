<?php

use App\Http\Controllers\Admin\AuthorController;

Route::get('/admin/authors', [AuthorController::class, 'index']);
