<?php

use Illuminate\Database\Seeder;

class TypesTableSeeder extends Seeder
{
    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run()
    {
        //
        $types = [
            ['type'=>'Musical'],
            ['type'=>'Comique'],
            ['type'=>'Théatre'],
        ];
        foreach ($types as $type) {     
            DB::table('types')->insert([
                'type' => $type['type'],
            ]);
        }
    }
}
