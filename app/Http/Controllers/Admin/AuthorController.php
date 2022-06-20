<?php

namespace App\Http\Controllers\Admin;


use App\Http\Controllers\Controller;
use Illuminate\Http\Request;
use App\Models\Author;

class AuthorController extends Controller
{
    public function index()
    {
        $authors = Author::orderBy('id')
            ->limit(50)
            ->get();

        return view(
            'authors/authors',
            compact('authors')
        );
    }
}
