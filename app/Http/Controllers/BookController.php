<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Models\Book;

class BookController extends Controller
{
    public function index()
    {
        Book::create([
            'title' => 'Clean Code',
            'author' => 'Robert C. Martin',
            'publication_year' => 2008,
            'isbn' => '9780132350884',
        ]);
        
        return view('books');
    }
}
