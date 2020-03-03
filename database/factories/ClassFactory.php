<?php

/** @var \Illuminate\Database\Eloquent\Factory $factory */

use App\Class;
use App\Course;
use Carbon\Carbon;
use Faker\Generator as Faker;

$factory->define(Class::class, function (Faker $faker) {
    return [
        'name' => $faker->name,
        'start_date' => Carbon::now(),
        'end_date' => Carbon::now(),
        'course_id' => function() {
            return factory(App\Course::class)->create()->id;
        },
    ];
});
