<?php

/** @var \Illuminate\Database\Eloquent\Factory $factory */

use App\Reply;
use Faker\Generator as Faker;

$factory->define(Reply::class, function (Faker $faker) {
    return [
        'discuss_id' => function (){
        	 return factory(App\Discuss::class)->create()->id;
        },
        'answer' => $faker->address,
        'is_correct' => 'correct',
        'model' => 'Trainer',
        'model_id' => function (){
        	 return factory(App\Trainer::class)->create()->id;
        },

    ];
});
