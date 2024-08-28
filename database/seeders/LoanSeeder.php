<?php

namespace Database\Seeders;

use Illuminate\Database\Console\Seeds\WithoutModelEvents;
use Illuminate\Database\Seeder;
use App\Models\Loan;
use App\Models\User;
use Faker\Generator as Faker;

class LoanSeeder extends Seeder
{
    /**
     * Run the database seeds.
     */
    public function run(Faker $faker): void
    {
        //
        $users_id = User::all()->pluck("id");

        for ($i=0; $i < 500; $i++) {
            $data = [
                "user_id"=>$faker->randomElement($users_id),
                "start_date"=> $faker->dateTimeBetween('-5 years'),
                "end_date"=> $faker->dateTimeBetween('now', 'now +1 month'),
                "notes"=> $faker->text(),
            ];

            Loan::create($data);
            }
    }
}
