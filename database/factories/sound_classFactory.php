<?php

/** @var \Illuminate\Database\Eloquent\Factory $factory */

use App\Models\sound_class;
use Faker\Generator as Faker;

$factory->define(sound_class::class, function (Faker $faker) {

    return [
        'page_id' => $faker->randomDigitNotNull,
        'class_name' => $faker->word,
        'description' => $faker->word,
        'publish' => $faker->randomDigitNotNull
    ];
});
