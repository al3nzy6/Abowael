<?php

/** @var \Illuminate\Database\Eloquent\Factory $factory */

use App\Models\guestbook;
use Faker\Generator as Faker;

$factory->define(guestbook::class, function (Faker $faker) {

    return [
        'name' => $faker->word,
        'email' => $faker->word,
        'comment' => $faker->text,
        'datetime' => $faker->word
    ];
});
