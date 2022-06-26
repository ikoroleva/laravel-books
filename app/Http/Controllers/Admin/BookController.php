<?php

namespace App\Http\Controllers\Admin;

use App\Http\Controllers\Controller;
use Illuminate\Http\Request;
use App\Models\Book;

class BookController extends Controller
{
    public function index()
    {
        $books = Book::orderBy('id', 'desc')
            ->limit(50)
            ->get();

        return view(
            'books/index',
            compact('books')
        );
    }

    public function show($id)
    {
        $book = Book::findOrFail($id);

        $authors = $book->authors;

        $reviews = $book->reviews;

        // dd($reviews);

        return view('books.show', compact('book', 'authors', 'reviews'));
    }
}
