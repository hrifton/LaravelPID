<?php

use Illuminate\Database\Seeder;

class LocalitiesTableSeeder extends Seeder
{
    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run()
    {
        $localities = [
            ['postal_code'=>'1470','locality'=>'Genappe'],
            ['postal_code'=>'1000','locality'=>'Bruxelles'],
        ];
        foreach($localities as $localitie) {
            DB::table('localities')->insert([
                'postal_code' => $localitie['postal_code'],
                'locality' => $localitie['locality'],
            ]);
        }
    }
}
