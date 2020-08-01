<?php

/** @var \Illuminate\Database\Eloquent\Factory $factory */

use App\Process;
use Faker\Generator as Faker;

$factory->define(Process::class, function (Faker $faker) {
    $user = \App\User::inRandomOrder()->first();

    return [
        'cooperation_id' => \App\Cooperation::inRandomOrder()->first(),
        'actiondescription_id' => \App\ActionDescription::inRandomOrder()->first(),
        'action_id' => \App\Action::inRandomOrder()->first(),
        'user_id' => $user->id == 1 ? factory(App\User::class) : $user,
        'contract_id' => factory(\App\Contract::class)
    ];
});
