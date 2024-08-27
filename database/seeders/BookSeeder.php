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
        // $editor_id = Editor::all()->pluck("id");
        // $category_id = Category::all()->pluck("id");
        // $translator_id = Translator::all()->pluck("id");

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
                "title"=> $faker->sentence(5, true),
                "description"=>$faker->realText(500),
                "genre" => $faker->randomElement($genres),
                "language"=> $faker->randomElement($languages),
                "cover_img"=>$faker->imageUrl(),
                "isbn"=>$faker->randomNumber(9, true),
                "price"=> $faker->randomFloat(2, 4.99, 49.99),
                "pages"=> $faker->numberBetween(1, 5000),
                "is_available"=> $faker->boolean(80),
                "state"=> $faker->randomElement($conditions),
            ];

            Book::create($data);
        }


    }
}

