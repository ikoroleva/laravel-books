@extends('layouts/main', [
    'current_page' => 'homepage'
])

{{-- @section('stylesheets')
    <link rel="stylesheet" href="style.css">
@endsection --}}

@section('scripts')
    <script src="{{ mix('js/latest-books.js') }}" defer></script>
@endsection

@section('content')

<h1>My Best Bookstore</h1>

<p>Looking for a book? <br>  We are simply the best! Explore thousands upon thousands of books from all the most famous authors.</p>

<h3>Latest books</h3>

<div id="latest-books"></div>

<ul>
    @foreach ($books as $book)
    <li>
        {{$book->title}}

        @foreach($book->authors as $author)
        {{$author->name}}
        @endforeach

    </li>
    @endforeach
</ul>




@endsection