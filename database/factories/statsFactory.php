<?php

/** @var \Illuminate\Database\Eloquent\Factory $factory */

use App\Models\stats;
use Faker\Generator as Faker;

$factory->define(stats::class, function (Faker $faker) {

    return [
        'ip' => $faker->word,
        'date' => $faker->word,
        'hits' => $faker->randomDigitNotNull
    ];
});
