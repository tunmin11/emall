<?php

/** @var \Illuminate\Database\Eloquent\Factory $factory */

use App\AssigmentAnswer;
use Faker\Generator as Faker;

$factory->define(AssigmentAnswer::class, function (Faker $faker) {
    return [
        'assigment_id' => function (){
        	 return factory(App\Assigment::class)->create()->id;
        },
        'trainee_id' => function (){
        	 return factory(App\Trainee::class)->create()->id;
        },
        'mark' => '75',
        'assess_by_id' => function (){
        	 return factory(App\Trainer::class)->create()->id;
        },
        'assessment_remark' => 'great',
        'assessment_status' => 'done',
        'submission' => '/storage/assigment_submission/class1B.pdf',

    ];
});
