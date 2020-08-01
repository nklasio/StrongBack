<?php

/** @var \Illuminate\Database\Eloquent\Factory $factory */

use App\ActionDescription;
use Faker\Generator as Faker;

$factory->define(ActionDescription::class, function (Faker $faker) {
    return [
        'name' => $faker->name,
    ];
});
