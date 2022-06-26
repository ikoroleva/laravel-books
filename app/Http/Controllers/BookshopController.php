<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Models\Bookshop;

class BookshopController extends Controller
{
    public function index()
    {
        $bookshops = Bookshop::orderBy('id', 'asc')
            ->get();

        return view(
            'bookshops/index',
            compact('bookshops')
        );
    }

    public function show($id)
    {
        $bookshop = Bookshop::findOrFail($id);

        $books = $bookshop->books;

        // dd($reviews);

        return view('bookshops.show', compact('bookshop', 'books'));
    }
}
