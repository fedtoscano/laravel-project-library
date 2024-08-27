<?php

namespace Database\Seeders;

use Illuminate\Database\Console\Seeds\WithoutModelEvents;
use App\Models\Translator;
use Illuminate\Database\Seeder;
use Faker\Generator as Faker;

class TranslatorSeeder extends Seeder
{
    /**
     * Run the database seeds.
     */
    public function run(Faker $faker): void
    {
        //
        for ($i=0; $i < 250; $i++) {


            $data = [
                "name"=> $faker->unique()->name(),
                "nationality"=>$faker->country(),
                "born"=>$faker->dateTimeBetween('1740-01-01', '1990-12-31'),
                "description"=>$faker->realText(300),
                "image"=> $faker->imageUrl(),
            ];

            Translator::create($data);
        }
    }
}
