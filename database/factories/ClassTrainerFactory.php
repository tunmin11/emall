<?php

/** @var \Illuminate\Database\Eloquent\Factory $factory */
use App\ClassTrainer;
use Faker\Generator as Faker;

$factory->define(ClassTrainer::class, function (Faker $faker) {
    return [
        'classroom_id' => function (){
        	 return factory(App\Classroom::class)->create()->id;
        },
        'trainer_id' => function (){
        	 return factory(App\Trainer::class)->create()->id;
        },
    ];
});
