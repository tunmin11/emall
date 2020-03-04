<?php

/** @var \Illuminate\Database\Eloquent\Factory $factory */

use App\DiscussRoom;
use Faker\Generator as Faker;

$factory->define(DiscussRoom::class, function (Faker $faker) {
    return [
        'name' => $faker->name,
        'classroom_id' => function (){
        	 return factory(App\Classroom::class)->create()->id;
        },
    ];
});
