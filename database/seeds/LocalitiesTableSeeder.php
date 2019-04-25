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
            ['postal_code'=>'1000','locality'=>'Bruxelles'],
            ['postal_code'=>'1470','locality'=>'Genappe'],
            ['postal_code'=>'1471','locality'=>'Loupoigne'],
            ['postal_code'=>'1472','locality'=>'Vieux-Genappe'],
            ['postal_code'=>'1473','locality'=>'Glabais'],
            ['postal_code'=>'1474','locality'=>'Ways'],
            ['postal_code'=>'1476','locality'=>'Houtainle-Val'],


        ];
        foreach($localities as $localitie) {
            DB::table('localities')->insert([
                'postal_code' => $localitie['postal_code'],
                'locality' => $localitie['locality'],
            ]);
        }
    }
}
