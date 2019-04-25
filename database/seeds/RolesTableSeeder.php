<?php

use Illuminate\Database\Seeder;

class RolesTableSeeder extends Seeder
{
    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run()
    {
        //
        $roles = [
            ['role'=>'ADMIN'],
            ['role'=>'MEMBRE'],
        ];
        foreach ($roles as $role) {     
            DB::table('roles')->insert([
                'role' => $role['role'],
            ]);
        }
    }
}
