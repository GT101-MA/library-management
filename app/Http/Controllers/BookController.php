<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Models\Book;

class BookController extends Controller
{
    public function index()
    {      
        $books = Book::all();
        return view('books', ['books' => $books]); // compact('books') - radi isto
    }

    public function create()
    {      
        return view('books.create');
    }

    public function store(Request $request)
    {
        $validated = $request->validate([
            'title' => 'required|string|max:255',
            'author' => 'required|string|max:255',
            'publication_year' => 'required|integer',
            'isbn' => 'required|string',
        ]);
        
        Book::create($validated);

        return redirect() -> route ('books.index');
    
    }

    public function show(Book $book)
    {
        return view('books.show', [
            'book' => $book
        ]);
    }
}
