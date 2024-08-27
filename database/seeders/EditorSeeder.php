<?php

namespace Database\Seeders;
use App\Models\Editor;

use Illuminate\Database\Console\Seeds\WithoutModelEvents;
use Illuminate\Database\Seeder;
use Faker\Generator as Faker;


class EditorSeeder extends Seeder
{
    /**
     * Run the database seeds.
     */
    public function run(Faker $faker): void
    {
        //


        for ($i=0; $i < 15; $i++) {

            $data = [
                'name' => $faker->unique()->company(),
                'city' => $faker->city(),
                'description' => $faker->realText(300),
                'image' => $faker->imageUrl(640, 640, 'editor', true, 'editor'),
            ];
            Editor::create($data);
        }
    }
}
