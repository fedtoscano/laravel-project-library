<?php

namespace Database\Seeders;

use App\Models\Category;

use Illuminate\Database\Console\Seeds\WithoutModelEvents;
use Illuminate\Database\Seeder;
use Faker\Generator as Faker;

class CategorySeeder extends Seeder
{
    /**
     * Run the database seeds.
     */
    public function run(Faker $faker): void
    {
        //
        $categories = [
            ['name' => 'Novel', 'color' => '#FF5733'],
            ['name' => 'Essay', 'color' => '#33FF57'],
            ['name' => 'Scientific', 'color' => '#3357FF'],
            ['name' => 'Poetry', 'color' => '#F4A300'],
            ['name' => 'Self-Help', 'color' => '#F40077'],
            ['name' => 'History', 'color' => '#A3F400'],
            ['name' => 'Philosophy', 'color' => '#F4B800'],
            ['name' => 'Drama', 'color' => '#B800F4'],
            ['name' => 'Travel', 'color' => '#F4F400'],
        ];

        foreach ($categories as $category) {
            Category::create($category);
        }
    }
}
