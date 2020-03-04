<?php

/** @var \Illuminate\Database\Eloquent\Factory $factory */

use App\Chapter;
use App\WeeklyTutorial;
use Carbon\Carbon;
use Faker\Generator as Faker;

$factory->define(WeeklyTutorial::class, function (Faker $faker) {
    return [
        'chapter_id' => function (){
        	 return factory(App\Chapter::class)->create()->id;
        },
        'question' => $faker->address,
        'end_date' => Carbon::now()->add(7,'day'),
    ];
});
