<?php

/** @var \Illuminate\Database\Eloquent\Factory $factory */

use App\Models\shakawi;
use Faker\Generator as Faker;

$factory->define(shakawi::class, function (Faker $faker) {

    return [
        'name' => $faker->word,
        'mail' => $faker->word,
        'date' => $faker->word,
        'message' => $faker->word
    ];
});
