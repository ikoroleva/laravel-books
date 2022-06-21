@extends('layouts/main', [
    'title' => 'Books',
    'current_page' => 'books'
])

@section('stylesheets')
    <link rel="stylesheet" href="style.css">
    <link rel="stylesheet" href="books.css">
@endsection

@section('content')

<h1>Books</h1>

@foreach($books as $book)

<li>{{$book->title}}</li>

@endforeach

@endsection