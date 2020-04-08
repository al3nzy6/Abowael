<?php

/** @var \Illuminate\Database\Eloquent\Factory $factory */

use App\Models\video;
use Faker\Generator as Faker;

$factory->define(video::class, function (Faker $faker) {

    return [
        'video_class' => $faker->randomDigitNotNull,
        'date' => $faker->word,
        'video_name' => $faker->word,
        'video_link' => $faker->word,
        'pic_link' => $faker->word,
        'visit' => $faker->randomDigitNotNull,
        'sent' => $faker->randomDigitNotNull
    ];
});
