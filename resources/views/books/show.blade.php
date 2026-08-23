@extends('layouts.app')

@section('content')

   <h2>{{ $book->title }}</h2>

   <p>Author: {{ $book->author }}</p>

   <p>Publication year: {{ $book->publication_year }}</p>

   <p>ISBN: {{ $book->isbn }}</p>

   <a href="{{ route('books.edit', $book) }}">Edit</a>

   <form action="{{ route('books.destroy', $book) }}" method="POST" style="display: inline-block;">
       @csrf
       @method('DELETE')
       <button type="submit" onclick="return confirm('Are you sure you want to delete this book?')">Delete</button>   
   </form>
   
@endsection
