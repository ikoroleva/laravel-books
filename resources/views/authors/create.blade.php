<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <meta http-equiv="X-UA-Compatible" content="ie=edge">
    <title>{{ $author->id ? 'Edit': 'Create' }} an author</title>
    <link rel="stylesheet" href="style.css">
</head>
<body>
    <h1>{{ $author->id ? 'Edit': 'Create' }} an author</h1>

    @if ($author->id)
        {{-- <form action="/movies/{{ $movie->id }}" method="post"> --}}
        <form action="{{ route('authors.update', ['authorId' => $author->id])}}" method="post">
            @method('put')
    @else
        <form action="{{ route('authors.store') }}" method="post">
    @endif
        @csrf

            <label>Name:</label>
            <input
                type="text"
                name="name"
                value="{{ $author->name }}"
            >

            <br>
            <br>
            
            <label>Slug:</label>
            <input
                type="text"
                name="slug"
                value="{{ $author->slug }}"
            >

            <br>
            <br>

            <label>Bio:</label>
            <textarea name="bio" cols="30" rows="10">
                {!! $author->bio !!}

            </textarea>

        <button>Send</button>

    </form>
</body>
</html>