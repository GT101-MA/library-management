<?php

namespace Database\Seeders;

use Illuminate\Database\Console\Seeds\WithoutModelEvents;
use Illuminate\Database\Seeder;
use App\Models\Book;
use App\Models\Author;

class BookSeeder extends Seeder
{
    /**
     * Run the database seeds.
     */
    public function run(): void
    {
        $robertMartin = Author::where('name', 'Robert C. Martin')->firstOrFail();
        $tolkien = Author::where('name', 'J.R.R. Tolkien')->firstOrFail();
        $rowling = Author::where('name', 'J.K. Rowling')->firstOrFail();

        Book::updateOrCreate(
            ['isbn' => '9780132350884',
            ],
            [
                'title' => 'Clean Code',
                'author_id' => $robertMartin->id,
                'publication_year' => 2008,
            ]
        );

        Book::updateOrCreate(
            [
                'isbn' => '9780261102217',
            ],
            [
                'title' => 'The Hobbit',
                'author_id' => $tolkien->id,
                'publication_year' => 1937,
            ]
        );


        Book::updateOrCreate(
            [
                'isbn' => '9780747532743',
            ],
            [
                'title' => "Harry Potter and the Philosopher's Stone",
                'author_id' => $rowling->id,
                'publication_year' => 1997,
            ]
        );
    }
}

