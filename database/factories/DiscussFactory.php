<?php

/** @var \Illuminate\Database\Eloquent\Factory $factory */

use App\Discuss;
use Faker\Generator as Faker;

$factory->define(Discuss::class, function (Faker $faker) {
    return [
        'discuss_room_id' => function (){
        	 return factory(App\DiscussRoom::class)->create()->id;
        },
        'model' => 'Trainee',
        'model_id' => function (){
        	 return factory(App\Trainee::class)->create()->id;
        },
        'question' => $faker->address,

    ];
});
