<?php

use Illuminate\Database\Seeder;

class GeneralTablesSeeder extends Seeder
{
    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run()
    {
        factory(App\Course::class)->create();
        factory(App\Classroom::class)->create();
        factory(App\ClassTrainee::class)->create();
        factory(App\ClassTrainer::class)->create();
        factory(App\Chapter::class)->create();
        factory(App\Video::class)->create();
        factory(App\Certificate::class)->create();
        factory(App\Assigment::class)->create();
        factory(App\AssigmentAnswer::class)->create();
        factory(App\Discuss::class)->create();
        factory(App\DiscussRoom::class)->create();
        factory(App\Reply::class)->create();
    }
}
