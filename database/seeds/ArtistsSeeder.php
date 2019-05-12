<?php

use Illuminate\Database\Seeder;
use Faker\Generator as Faker;
use App\Artist;

class ArtistsSeeder extends Seeder
{
    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run()
    {
        $faker = \Faker\Factory::create();

        foreach(range(1, 20) as $index) {
            Artist::create([
                'firstName'     => $faker->firstName,
                'lastName'     => $faker->lastName
            ]);
        };
    }
}
