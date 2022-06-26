@extends('layouts/main', [
    'title' => 'Bookshops',
    'current_page' => 'bookshops'
])


@section('content')

<br>

{{-- <h3>Hi from details view of bookshop {{$bookshop->id}}</h3> --}}

<h3>{{$bookshop->name}}</h3>
<h4>{{$bookshop->city}}</h4>

<br>

<h4>Books:</h4>
<ul>
@foreach($books as $book)
   <li><a href="{{route('books.show', $book->id)}}"> {{$book->title}} </a></li>
@endforeach
</ul>
<div>   
</div>






@endsection