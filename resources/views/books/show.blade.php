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

    @include('common/messages');
   
    <form action="{{$book->id}}/review" method="post">
        @csrf

        <textarea name="text" cols="60" rows="5">{{ old('text') }}</textarea>
        <br>
        <button>Send</button>
    </form>

    @endauth

    @foreach ($reviews as $review)

    <br>
    <div>{{$review->text}}</div>
    <br>



    @endforeach

@endsection