@extends('layouts/main', [
    'title' => 'Books',
    'current_page' => 'books'
])


@section('content')

<br>

<h3 class="movie__title">{{$book->title}}</h3>
<h4 class="movie__authors">
    @foreach($authors as $author)
        {{$author->name . " "}}
    @endforeach

</h4>
    <div class="movie__image">
         <img src="{{$book->image}}" alt="book cover">
    </div>
    <div class="movie__description">
        <p>{!!$book->description!!}</p>
   </div>

   @auth
    <h4>Reviews</h4>

    @include('common/messages')
   
    <form action="{{route('reviews.store', $book->id)}}" method="post">
        @csrf

        <textarea name="text" cols="60" rows="5">{{ old('text') }}</textarea>
        <br>
        <button>Send</button>
    </form>

    @endauth



    @foreach ($reviews as $review)

    <br>
    <div>{{$review->user->name}}</div>
    <br>
    <div>{{$review->text}}</div>
    <br>

    @can('admin')
    <form action="{{route('reviews.delete', $review->id)}}" method="POST">
        @method('delete')
        @csrf
        <button>Delete</button>
    </form>
    <br>
    @endcan


    @endforeach

@endsection