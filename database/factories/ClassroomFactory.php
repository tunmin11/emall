<?php

/** @var \Illuminate\Database\Eloquent\Factory $factory */

use App\Classroom;
use Carbon\Carbon;
use Faker\Generator as Faker;

$factory->define(Classroom::class, function (Faker $faker) {
    return [
        'name' => $faker->name,
        'start_date' => Carbon::now(),
        'end_date' => Carbon::now()->add(1, 'day'),
        'course_id' => function (){
        	 return factory(App\Course::class)->create()->id;
        }
    ];
});
