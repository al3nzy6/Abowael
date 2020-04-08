<?php

/** @var \Illuminate\Database\Eloquent\Factory $factory */

use App\Models\links;
use Faker\Generator as Faker;

$factory->define(links::class, function (Faker $faker) {

    return [
        'subject' => $faker->word,
        'link' => $faker->word
    ];
});
