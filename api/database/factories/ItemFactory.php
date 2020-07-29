<?php

/** @var \Illuminate\Database\Eloquent\Factory $factory */

use App\Items;
use Faker\Generator as Faker;

$factory->define(Items::class, function (Faker $faker) {
    return [
      'user_id' => '1',
        'name' => $faker->name,
        'amount' => $faker->randomDigit,
        'stocks_available' => $faker->randomDigit,
    ];
});
