<?php

namespace Database\Seeders;

use App\Models\Loan;
use App\Models\Book;
use Illuminate\Database\Console\Seeds\WithoutModelEvents;
use Illuminate\Database\Seeder;

class BookLoanSeeder extends Seeder
{
    /**
     * Run the database seeds.
     */
    public function run(): void
    {
        //
        $loans = Loan::all();
        $books_id = Book::all()->pluck("id");

        foreach ($loans as $loan) {
            $randomBooks = $books_id->random(rand(2, 5))->toArray();
            $loan->books()->sync($randomBooks);
        }
    }
}
