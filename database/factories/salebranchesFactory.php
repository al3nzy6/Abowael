<?php

/** @var \Illuminate\Database\Eloquent\Factory $factory */

use App\Models\salebranches;
use Faker\Generator as Faker;

$factory->define(salebranches::class, function (Faker $faker) {

    return [
        'mobile' => $faker->word,
        'name' => $faker->word,
        'mail' => $faker->word,
        'date' => $faker->word,
        'price1' => $faker->word,
        'type1' => $faker->word,
        'message' => $faker->text
    ];
});
