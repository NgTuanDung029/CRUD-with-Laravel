<?php

namespace Database\Seeders;

use Illuminate\Database\Console\Seeds\WithoutModelEvents;
use Illuminate\Database\Seeder;
use Faker\Factory as Faker;
use App\Models\Donor;

class DonorsTableSeeder extends Seeder
{
    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run()
    {
        //
        $faker = Faker::create();
        for ($i = 0; $i < 50; $i++) {
            Donor::create([
                'First_Name' => $faker->firstName(),
                'Last_Name' => $faker->lastName(),
                'Blood_Type' => $faker->bloodType(),
                'DOB' => $faker->date(),
                'Gender' => $faker->sentence(2, true),
                'Address' => $faker->address(),
                'Contact_Number' => $faker->phoneNumber(),
            ]);
        }
    }
}
