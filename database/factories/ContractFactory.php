<?php

/** @var \Illuminate\Database\Eloquent\Factory $factory */

use App\Contract;
use Faker\Generator as Faker;

$factory->define(Contract::class, function (Faker $faker) {
    return [
        'customer_id' => factory(\App\Customer::class),
        'contractIdentifier' => $faker->randomNumber(9),
    ];
});
