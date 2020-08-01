<?php

/** @var \Illuminate\Database\Eloquent\Factory $factory */

use App\Transactions;
use Faker\Generator as Faker;

$factory->define(Transactions::class, function (Faker $faker) {
    return [
        'user_id' => '1',
        'number' => $faker->randomDigit,
        'total_amount' => $faker->randomDigit,
    ];
});
