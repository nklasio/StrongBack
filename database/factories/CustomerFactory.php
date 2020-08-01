<?php

/** @var \Illuminate\Database\Eloquent\Factory $factory */

use App\Customer;
use Faker\Generator as Faker;

$factory->define(Customer::class, function (Faker $faker) {
    return [
        'anrede' => $faker->title,
        'name' => $faker->lastName,
        'vorname' => $faker->firstName,
        'telefonnummer' => $faker->phoneNumber,
        'telefon_mobil' => $faker->e164PhoneNumber,
        'email' => $faker->safeEmail,
        'strasse' => $faker->streetName,
        'hausnummer' => $faker->buildingNumber,
        'platz' => $faker->postcode,
        'ort' => $faker->city,
        'geburtsdatum' => $faker->dateTimeBetween('1940-01-01', '2012-12-31')->format('d.m.Y'),
    ];
});
