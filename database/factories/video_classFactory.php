<?php

/** @var \Illuminate\Database\Eloquent\Factory $factory */

use App\Models\video_class;
use Faker\Generator as Faker;

$factory->define(video_class::class, function (Faker $faker) {

    return [
        'video_class' => $faker->word,
        'comment' => $faker->word,
        'publish' => $faker->word
    ];
});
