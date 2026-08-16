<?php

namespace Database\Seeders;

use Illuminate\Database\Console\Seeds\WithoutModelEvents;
use Illuminate\Database\Seeder;
use App\Models\Book;

class BookSeeder extends Seeder
{
    /**
     * Run the database seeds.
     */
    public function run(): void
    {
        Book::create([
            'title' => 'Clean Code',
            'author' => 'Robert C. Martin',
            'publication_year' => 2008,
            'isbn' => '9780132350884',
        ]);

        Book::create([
            'title' => 'The Hobbit',
            'author' => 'J.R.R. Tolkien',
            'publication_year' => 1937,
            'isbn' => '9780261102217',
        ]);

        Book::create([
            'title' => 'Harry Potter and the Philosopher\'s Stone',
            'author' => 'J.K. Rowling',
            'publication_year' => 1997,
            'isbn' => '9780747532743',
        ]);

    }
}
