<?php

/** @var \Illuminate\Database\Eloquent\Factory $factory */

use App\Models\sound;
use Faker\Generator as Faker;

$factory->define(sound::class, function (Faker $faker) {

    return [
        'page_id' => $faker->randomDigitNotNull,
        'class_id' => $faker->randomDigitNotNull,
        'date' => $faker->word,
        'snd_name' => $faker->word,
        'file_name' => $faker->word,
        'size' => $faker->randomDigitNotNull,
        'type' => $faker->word,
        'visit' => $faker->word,
        'download' => $faker->word,
        'sent' => $faker->word,
        'soundtype' => $faker->randomDigitNotNull
    ];
});
