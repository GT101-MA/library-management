@extends('layouts.app')

@section('content')

   <h2>{{ $book->title }}</h2>

   <p>Author: {{ $book->author }}</p>

   <p>Publication year: {{ $book->publication_year }}</p>

   <p>ISBN: {{ $book->isbn }}</p>

@endsection
