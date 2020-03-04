<?php

/** @var \Illuminate\Database\Eloquent\Factory $factory */

use App\Certificate;
use Faker\Generator as Faker;

$factory->define(Certificate::class, function (Faker $faker) {
    return [
        'classroom_id' => function (){
        	 return factory(App\Classroom::class)->create()->id;
        },
        'trainee_id' => function (){
        	 return factory(App\Trainee::class)->create()->id;
        },
        'status' => 'approved',
        'approved_by_id' => function (){
        	 return factory(App\Trainer::class)->create()->id;
        },
    ];
});
