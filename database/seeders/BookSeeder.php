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
        $editors_id = Editor::all()->pluck("id");
        $categories_id = Category::all()->pluck("id");
        $translators_id = Translator::all()->pluck("id");

        $conditions = [
            'new',
            'like new',
            'very good',
            'good',
            'acceptable',
            'worn',
            'very used',
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
                "translator_id"=>$faker->randomElement($translators_id),
                "category_id"=>$faker->randomElement($categories_id),
                "editor_id"=> $faker->randomElement($editors_id),
                "genre" => $faker->randomElement($genres),
                "description"=>$faker->realText(500),
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

