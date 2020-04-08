<?php

/** @var \Illuminate\Database\Eloquent\Factory $factory */

use App\Models\countries;
use Faker\Generator as Faker;

$factory->define(countries::class, function (Faker $faker) {

    return [
        'code' => $faker->word,
        'country' => $faker->word
    ];
});
