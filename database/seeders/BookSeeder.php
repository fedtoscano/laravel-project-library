<?php

namespace Database\Seeders;

use Illuminate\Database\Console\Seeds\WithoutModelEvents;
use Faker\Generator as Faker;
use App\Models\Author;
use App\Models\Editor;
use App\Models\Category;
use App\Models\Translator;
use App\Models\Book;
use Illuminate\Database\Seeder;

class BookSeeder extends Seeder
{
    /**
     * Run the database seeds.
     */
    public function run(Faker $faker): void
    {
        //
        // $authors_id = Author::all()->pluck("id");
        $editors_id = Editor::all()->pluck("id");
        $categories_id = Category::all()->pluck("id");
        $translators_id = Translator::all()->pluck("id");

        $conditions = [
            'new',            // Condizione nuova, mai letto, perfetto.
            'like new',       // Appare come nuovo, ma potrebbe essere stato letto una volta, nessun segno di usura visibile.
            'very good',      // Leggermente usato, minimi segni di usura, nessun danno alle pagine o alla copertina.
            'good',           // Mostra alcuni segni di usura, ma è ancora in buone condizioni. Nessuna pagina mancante o danneggiata.
            'acceptable',     // Usura visibile, possibili pieghe o piccoli strappi, ma ancora leggibile.
            'worn',           // Segni di usura significativi, possibili pagine danneggiate o marcature.
            'very used',      // Molto usato, usura e strappi evidenti, possibili annotazioni o pagine mancanti.
        ];

        $genres = [
            'fiction',
            'non-fiction',
            'mystery',
            'fantasy',
            'science fiction',
            'historical',
            'romance',
            'thriller',
            'biography',
            'autobiography',
            'poetry',
            'drama',
            'horror',
            'classic',
            'adventure',
            'young adult',
            'children',
            'memoir',
            'self-help',
            'essay',
        ];

        $languages = [
            'English',
            'Spanish',
            'French', 'German', 'Italian', 'Chinese', 'Japanese', 'Russian', 'Portuguese', 'Arabic'
        ];

        for ($i=0; $i < 500; $i++) {
            $data = [
                // "author_id"=>$faker->randomElements($authors_id, $count = rand(1, 3)),
                "editor_id"=> $faker->randomElement($editors_id),
                "category_id"=>$faker->randomElement($categories_id),
                "translator_id"=>$faker->randomElement($translators_id),
                "title"=> $faker->sentence(5, true),
                "description"=>$faker->realText(500),
                "genre" => $faker->randomElement($genres),
                "language"=> $faker->randomElement($languages),
                "cover_img"=>$faker->imageUrl(),
                "isbn"=>$faker->randomNumber(9, true),
                "price"=> $faker->randomFloat(2, 4.99, 49.99),
                "pages"=> $faker->numberBetween(1, 1500),
                "is_available"=> $faker->boolean(80),
                "state"=> $faker->randomElement($conditions),
            ];
            Book::create($data);
        }


    }
}

