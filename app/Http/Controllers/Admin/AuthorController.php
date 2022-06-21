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
            'authors/index',
            compact('authors')
        );
    }
    public function create()
    {
        // prepare empty object
        $author = new Author;

        // display the form view, passing in the author
        return view('authors.create', compact('author'));
    }

    public function store(Request $request)
    {
        //        $this->validateMovie($request);
        $author = new Author;

        $author->name = $request->input('name');
        $author->slug = $request->input('slug');
        $author->bio = $request->input('bio');

        $author->save();


        return redirect(url('/admin/authors'));
    }
}
