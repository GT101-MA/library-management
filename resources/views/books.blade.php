@extends('layouts.app')

@section('content')

    <h2>Books</h2>

    @foreach ($books as $book)

        <div>
            <h3>{{ $book->title }}</h3>

            <p>Author: {{ $book->author }}</p>

            <p>Publication year: {{ $book->publication_year }}</p>

            <p>ISBN: {{ $book->isbn }}</p>
        </div>

        <a href="{{ route('books.show', $book->id) }}">View</a>

        <hr>


    @endforeach

@endsection

