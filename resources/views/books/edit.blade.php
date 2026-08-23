@extends('layouts.app')

@section('content')

    <h2>Edit Book</h2>

    <form action="{{ route('books.update', $book) }}" method="POST">

       @csrf
       @method('PUT')

       <div>
           <label for="title">Title</label>

           <input
               type="text"
               id="title"
               name="title"
               value="{{ $book->title }}"
           >
       </div>

       <br>

       <div>
           <label for="author">Author</label>

           <input
               type="text"
               id="author"
               name="author"
               value="{{ $book->author }}"
           >
       </div>

       <br>

       <div>
           <label for="publication_year">Publication Year</label>

           <input
               type="number"
               id="publication_year"
               name="publication_year"
               value="{{ $book->publication_year }}"
           >
       </div>

       <br>

       <div>
           <label for="isbn">ISBN</label>

           <input
               type="text"
               id="isbn"
               name="isbn"
               value="{{ $book->isbn }}"
           >
       </div>

       <br>

       <button type="submit">Save Changes</button>

    </form>

@endsection
