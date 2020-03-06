<?php

use App\Trainer;
use Illuminate\Database\Seeder;

class TrainerSeeder extends Seeder
{
    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run()
    {
 
        $instructor =  factory(App\Trainer::class)->create();
		$instructor->assignRole('instructor');
    }
}
