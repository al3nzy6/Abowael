<?php

/** @var \Illuminate\Database\Eloquent\Factory $factory */

use App\Models\ips;
use Faker\Generator as Faker;

$factory->define(ips::class, function (Faker $faker) {

    return [
        'ips' => $faker->randomDigitNotNull,
        'code' => $faker->word
    ];
});
