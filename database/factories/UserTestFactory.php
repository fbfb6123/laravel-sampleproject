<?php

/** @var \Illuminate\Database\Eloquent\Factory $factory */

use App\Model;
use Faker\Generator as Faker;

$factory->define(UserTest::class, function (Faker $faker) {
    return [
        'name' => $faker->name,
        'mail' => $faker->email,
        'age' => $faker->numberBetween(1,100),
    ];
});
