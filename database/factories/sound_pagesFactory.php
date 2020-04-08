<?php

/** @var \Illuminate\Database\Eloquent\Factory $factory */

use App\Models\sound_pages;
use Faker\Generator as Faker;

$factory->define(sound_pages::class, function (Faker $faker) {

    return [
        'pages' => $faker->word,
        'description' => $faker->text,
        'publish' => $faker->randomDigitNotNull
    ];
});
