<?php

/** @var \Illuminate\Database\Eloquent\Factory $factory */
use App\Trainee;
use App\Trainer;
use App\WeeklyTutorial;
use App\WeeklyTutorialAnswer;
use Faker\Generator as Faker;

$factory->define(WeeklyTutorialAnswer::class, function (Faker $faker) {
    return [
        'weekly_tutorial_id' => function (){
        	 return factory(App\WeeklyTutorial::class)->create()->id;
        },
        'submission' => json_encode(['1A' => 'a' 					, '1B' => 'c']),
        'assess_by_id' => function (){
        	 return factory(App\Trainer::class)->create()->id;
        }, 
        'trainee_id' => function (){
        	 return factory(App\Trainee::class)->create()->id;
        },
        'mark' => '90',
        'assessment_remark' => 'great',
        'assessment_status' => 'done',
    ];
});
