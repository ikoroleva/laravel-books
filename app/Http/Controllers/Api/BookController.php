<?php

namespace App\Http\Controllers\Api;

use App\Http\Controllers\Controller;
use Illuminate\Http\Request;
use App\Models\Book;
use App\Http\Resources\BookResourse;
//use App\Http\Controllers\Api\BookController;

class BookController extends Controller
{
    public function latest()
    {
        $books = Book::with('authors')->orderBy('publication_date', 'desc')->limit(10)->get();

        return BookResourse::collection($books);
    }
}
