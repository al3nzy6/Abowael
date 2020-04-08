<?php

/** @var \Illuminate\Database\Eloquent\Factory $factory */

use App\Models\ra_counter;
use Faker\Generator as Faker;

$factory->define(ra_counter::class, function (Faker $faker) {

    return [
        'ID' => $faker->word,
        'Count' => $faker->word
    ];
});
