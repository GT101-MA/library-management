@extends('layouts.app')
@section('content')

    <h2>Add a Book</h2>

    <form action="{{ route('books.store') }}" method="post">
        @csrf
        <div>
            <label>Title</label>
            <input type="text" name="title">
        </div>

        <br>

        <div>
            <label for="author_id">Author</label>
            <select id="author_id" name="author_id">
                @foreach ($authors as $author)
                    <option value="{{ $author->id }}">
                        {{ $author->name }}
                    </option>
                @endforeach
            </select>
        
        </div>

        <br>        

        <div>
            <label>Publication Year</label>
            <input type="number" name="publication_year">
        </div>

        <br>

        <div>
            <label>ISBN</label>
            <input type="text" name="isbn">
        </div>

        <br>

        <button>
            Save Book
        </button>

    </form>

@endsection