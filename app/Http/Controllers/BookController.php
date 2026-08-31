<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Models\Book;
use App\Models\Author;

class BookController extends Controller
{
    public function index()
    {      
        $books = Book::with('author')->get(); // eager loading  
        return view('books', 
        ['books' => $books]); // compact('books') - radi isto
    }

    public function create()
    {      
        $authors = Author::all();
        return view('books.create', 
        ['authors' => $authors]);
    }

    public function store(Request $request)
    {
        $validated = $request->validate([
            'title' => 'required|string|max:255',
            'author_id' => 'required|exists:authors,id',
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

    public function edit(Book $book)
    {
        $authors = Author::all();
        return view('books.edit', [
            'book' => $book,
            'authors' => $authors
        ]);
    }

    public function update(Request $request, Book $book)
    {
        $validated = $request->validate([
            'title' => 'required|string|max:255',
            'author_id' => 'required|exists:authors,id',
            'publication_year' => 'required|integer',
            'isbn' => 'required|string',
        ]);
    
        $book -> update($validated);
    
        return redirect()->route('books.show', $book);
    }

    public function destroy(Book $book)
    {
        $book->delete();
    
        return redirect()->route('books.index');
    }
}
