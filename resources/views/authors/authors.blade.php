@extends('layouts/main', [
    'title' => 'Authors',
    'current_page' => 'authors'
])

@section('stylesheets')
    <link rel="stylesheet" href="style.css">
    <link rel="stylesheet" href="about-us.css">
@endsection

@section('content')

<h1>Authors</h1>

@foreach($authors as $author)

<li>{{$author->name}}</li>

@endforeach

@endsection

