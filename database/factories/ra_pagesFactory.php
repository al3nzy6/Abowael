<?php

/** @var \Illuminate\Database\Eloquent\Factory $factory */

use App\Models\ra_pages;
use Faker\Generator as Faker;

$factory->define(ra_pages::class, function (Faker $faker) {

    return [
        'pages' => $faker->word,
        'description' => $faker->text,
        'publish' => $faker->randomDigitNotNull
    ];
});
