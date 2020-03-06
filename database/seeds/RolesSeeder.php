<?php

use Illuminate\Database\Seeder;

class RolesSeeder extends Seeder
{
    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run()
    {
        $roles = [
        	['name' => 'admin' , 'guard_name' => 'admin'],
        	['name' => 'instructor' , 'guard_name' => 'instructor'],
        	['name' => 'trainee' , 'guard_name' => 'trainee']
        ];

        foreach ($roles as $role) {
        	DB::table('roles')->insert($role);
        }
    }
}
