<?php

/** @var \Illuminate\Database\Eloquent\Factory $factory */

use App\Models\ra_useronline;
use Faker\Generator as Faker;

$factory->define(ra_useronline::class, function (Faker $faker) {

    return [
        'ip' => $faker->word,
        'file' => $faker->word
    ];
});
