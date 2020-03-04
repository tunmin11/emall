<?php

/** @var \Illuminate\Database\Eloquent\Factory $factory */

use App\Assigment;
use App\Classroom;
use Carbon\Carbon;
use Faker\Generator as Faker;

$factory->define(Assigment::class, function (Faker $faker) {
    return [
        'name' => $faker->name,
        'classroom_id' => function (){
        	 return factory(App\Classroom::class)->create()->id;
        },
        'start_date' => Carbon::now(),
        'end_date' => Carbon::now()->add(1, 'month'),
    ];
});
