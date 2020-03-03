<?php

/** @var \Illuminate\Database\Eloquent\Factory $factory */

use App\Course;
use Faker\Generator as Faker;

$factory->define(Course::class, function (Faker $faker) {
    return [
        'name' => $faker->name,
        'days' => "['monday','wednesday']",
        'trainer_id' => function() {
            return factory(App\Trainer::class)->create()->id;
        },
        'price' =>'120000Ks'
    ];
});
