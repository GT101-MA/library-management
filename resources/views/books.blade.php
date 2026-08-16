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

        <hr>

    @endforeach

@endsection

