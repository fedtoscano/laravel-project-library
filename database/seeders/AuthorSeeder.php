<?php

namespace Database\Seeders;

use Illuminate\Database\Console\Seeds\WithoutModelEvents;
use Illuminate\Database\Seeder;
use App\Models\Author;
use App\Models\Editor;
use Faker\Generator as Faker;

class AuthorSeeder extends Seeder
{
    /**
     * Run the database seeds.
     */
    public function run(Faker $faker): void
    {
        //
        $editors_id = Editor::all()->pluck("id");

        for ($i=0; $i < 250; $i++) {


            $data = [
                "name"=> $faker->unique()->name(),
                "nationality"=>$faker->country(),
                "born"=>$faker->dateTimeBetween('1740-01-01', '1990-12-31'),
                "presentation"=>$faker->realText(300),
                "image"=> $faker->imageUrl(),
                "editor_id"=>$faker->randomElement($editors_id)
            ];

            Author::create($data);
        }
    }
}
