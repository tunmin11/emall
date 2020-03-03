<?php

/** @var \Illuminate\Database\Eloquent\Factory $factory */

use App\Trainer;
use Faker\Generator as Faker;

$factory->define(Trainer::class, function (Faker $faker) {
    return [
        'name' => $faker->name,
        'email' => $faker->unique()->safeEmail,
        'password' => '$2y$10$92IXUNpkjO0rOQ5byMi.Ye4oKoEa3Ro9llC/.og/at2.uheWG/igi', // password
        'phone' => '09-993-454-234',
        'address' => $faker->address,
        'profile' => 'storage/app.jpg',
        'nrc' => '12/TaLaMa(N)139374',

    ];
});
