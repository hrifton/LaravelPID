<?php

use Illuminate\Database\Seeder;

class ArtistsTableSeeder extends Seeder
{
    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run()
    {
        //
        $artists = [
            ['firstName'=>'Jason','lastName'=>'Raize'],
            ['firstName'=>'Samuel E','lastName'=>'Wright'],
            ['firstName'=>'John','lastName'=>'Vickery'],
            ['firstName'=>'Max','lastName'=>'Casella'],
            ['firstName'=>'Tom Alan','lastName'=>'Robbins'],
            ['firstName'=>'Tsidii','lastName'=>'Le Loka'],
            ['firstName'=>'Heather','lastName'=>'Headley'],
            ['firstName'=>'Geoff','lastName'=>'Hoyle'],
        ];
        foreach ($artists as $artist) {     
            DB::table('artists')->insert([
                'firstName' => $artist['firstName'],
                'lastName' => $artist['lastName'],
            ]);
        }
    }
}
