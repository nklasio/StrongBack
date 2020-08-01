<?php

/** @var \Illuminate\Database\Eloquent\Factory $factory */

use App\Cooperation;
use Faker\Generator as Faker;

$factory->define(Cooperation::class, function (Faker $faker) {
    return [
        'name' => $faker->name,
    ];
});
