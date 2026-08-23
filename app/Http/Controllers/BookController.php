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

    public function edit(Book $book)
    {
        return view('books.edit', [
            'book' => $book
        ]);
    }

    public function update(Request $request, Book $book)
    {
        $validated = $request->validate([
            'title' => 'required|string|max:255',
            'author' => 'required|string|max:255',
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
