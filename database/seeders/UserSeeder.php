<?php

namespace Database\Seeders;

use Illuminate\Database\Console\Seeds\WithoutModelEvents;
use App\Models\User;
use Illuminate\Database\Seeder;
use Faker\Generator as Faker;
use Illuminate\Support\Facades\Hash;

class UserSeeder extends Seeder
{
    /**
     * Run the database seeds.
     */
    public function run(Faker $faker): void
    {
        //
        for ($i=0; $i < 300; $i++) {
            $data = [
                "name"=> $faker->name(),
                "email"=>$faker->email(),
                // "password"=>$faker->password(8, 20),
                "password"=> Hash::make($faker->password())
            ];

            User::create($data);
        }


    }
}
