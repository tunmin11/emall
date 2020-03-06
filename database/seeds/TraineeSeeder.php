<?php

use App\Trainee;
use Illuminate\Database\Seeder;
use Spatie\Permission\Traits\assignRole;

class TraineeSeeder extends Seeder
{
    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run()
    {
		$trainee =  factory(App\Trainee::class)->create();
		$trainee->assignRole('trainee');
    }
}
