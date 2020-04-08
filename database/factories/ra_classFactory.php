<?php

/** @var \Illuminate\Database\Eloquent\Factory $factory */

use App\Models\ra_class;
use Faker\Generator as Faker;

$factory->define(ra_class::class, function (Faker $faker) {

    return [
        'pages_id' => $faker->randomDigitNotNull,
        'class_n' => $faker->word,
        'description' => $faker->text,
        'publish' => $faker->randomDigitNotNull
    ];
});
