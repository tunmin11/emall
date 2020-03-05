<?php

/** @var \Illuminate\Database\Eloquent\Factory $factory */

use App\ClassTrainee;
use Faker\Generator as Faker;

$factory->define(ClassTrainee::class, function (Faker $faker) {
    return [
        'classroom_id' => function (){
        	 return factory(App\Classroom::class)->create()->id;
        },
        'trainee_id' => function (){
        	 return factory(App\Trainee::class)->create()->id;
        },
        'payment_archive' => '50% paid',
    ];
});
