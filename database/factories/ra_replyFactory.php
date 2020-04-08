<?php

/** @var \Illuminate\Database\Eloquent\Factory $factory */

use App\Models\ra_reply;
use Faker\Generator as Faker;

$factory->define(ra_reply::class, function (Faker $faker) {

    return [
        'id' => $faker->randomDigitNotNull,
        'content_id' => $faker->randomDigitNotNull,
        'r_id' => $faker->randomDigitNotNull,
        'r_name' => $faker->word,
        'r_email' => $faker->word,
        'r_answer' => $faker->text,
        'r_datetime' => $faker->word,
        'publish' => $faker->word,
        'readable' => $faker->randomDigitNotNull
    ];
});
