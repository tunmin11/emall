<?php

/** @var \Illuminate\Database\Eloquent\Factory $factory */

use App\Chapter;
use App\Video;
use Faker\Generator as Faker;

$factory->define(Video::class, function (Faker $faker) {
    return [
        'name' => $faker->name,
        'src' => 'storage/chapter1.mp4',
        'chapter_id' => function (){
        	 return factory(App\Chapter::class)->create()->id;
        },
    ];
});
