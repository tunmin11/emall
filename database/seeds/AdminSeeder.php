<?php

use App\Admin;
use Illuminate\Database\Seeder;
use Spatie\Permission\Models\Role;

class AdminSeeder extends Seeder
{
    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run()
    {

        $super_admin = Admin::create([
                    'name' => 'admin',
                    'email' => 'admin@gmail.com',
                    'password' => bcrypt('admin'),
                ]);
		$super_admin->assignRole('admin');
    }
}
