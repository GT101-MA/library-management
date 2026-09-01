<?php

namespace Database\Seeders;

use Illuminate\Database\Console\Seeds\WithoutModelEvents;
use Illuminate\Database\Seeder;
use App\Models\Author;


class AuthorSeeder extends Seeder
{
    /**
     * Run the database seeds.
     */
    public function run(): void
    {
        Author::firstOrCreate([
            'name' => 'Robert C. Martin',
        ]);

        Author::firstOrCreate([
            'name' => 'J.R.R. Tolkien',
        ]);

        Author::firstOrCreate([
            'name' => 'J.K. Rowling',
        ]);

    }
}
