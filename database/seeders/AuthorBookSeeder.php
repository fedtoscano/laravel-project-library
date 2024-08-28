<?php

namespace Database\Seeders;

use Illuminate\Database\Console\Seeds\WithoutModelEvents;
use App\Models\Book;
use App\Models\Author;
use Illuminate\Database\Seeder;

class AuthorBookSeeder extends Seeder
{
    /**
     * Run the database seeds.
     */
    public function run(): void
    {
        //
        $books = Book::all();
        $authors_id = Author::all()->pluck("id");

        foreach ($books as $book) {
            $randomAuthors = $authors_id->random(rand(1, 3))->toArray();
            $book->authors()->sync($randomAuthors);
        }
    }
}
