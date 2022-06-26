@extends('layouts/main', [
    'title' => 'Bookshops',
    'current_page' => 'bookshops'
])

@section('stylesheets')
    <link rel="stylesheet" href="style.css">
@endsection

@section('content')

<h1>Bookshops</h1>

@foreach($bookshops as $bookshop)

<li><a href="{{route('bookshops.show', $bookshop->id)}}">{{$bookshop->name}}</a></li>

@endforeach

@endsection