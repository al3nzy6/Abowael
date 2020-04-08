<?php

/** @var \Illuminate\Database\Eloquent\Factory $factory */

use App\Models\ra_content;
use Faker\Generator as Faker;

$factory->define(ra_content::class, function (Faker $faker) {

    return [
        'title' => $faker->word,
        'pages_id' => $faker->word,
        'class_id' => $faker->word,
        'content' => $faker->text,
        'picture' => $faker->word,
        'created' => $faker->word,
        'modified' => $faker->word,
        'view' => $faker->randomDigitNotNull,
        'reply' => $faker->randomDigitNotNull,
        'writer' => $faker->word,
        'sent' => $faker->randomDigitNotNull,
        'userid' => $faker->randomDigitNotNull,
        'publish' => $faker->randomDigitNotNull
    ];
});
