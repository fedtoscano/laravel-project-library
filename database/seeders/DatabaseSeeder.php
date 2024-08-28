<?php

namespace Database\Seeders;

// use Illuminate\Database\Console\Seeds\WithoutModelEvents;

use App\Models\Translator;
use Illuminate\Database\Seeder;

class DatabaseSeeder extends Seeder
{
    /**
     * Seed the application's database.
     */
    public function run(): void
    {
        $this->call([
            //inserire i seeder qui
            UserSeeder::class,
            CategorySeeder::class,
            EditorSeeder::class,
            AuthorSeeder::class,
            TranslatorSeeder::class,
            BookSeeder::class,
            LoanSeeder::class,

            //tabelle pivot
            AuthorBookSeeder::class,
            BookLoanSeeder::class,


        ]);
    }
}
