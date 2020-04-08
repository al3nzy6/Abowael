<?php

/** @var \Illuminate\Database\Eloquent\Factory $factory */

use App\Models\family;
use Faker\Generator as Faker;

$factory->define(family::class, function (Faker $faker) {

    return [
        'date' => $faker->word,
        'first_name' => $faker->word,
        'second_name' => $faker->word,
        'third_name' => $faker->word,
        'family' => $faker->word,
        'id_num' => $faker->word,
        'mobile' => $faker->word,
        'reg_day' => $faker->randomDigitNotNull,
        'reg_month' => $faker->randomDigitNotNull,
        'reg_year' => $faker->randomDigitNotNull,
        'area' => $faker->randomDigitNotNull,
        'job' => $faker->randomDigitNotNull,
        'sharing' => $faker->randomDigitNotNull,
        'id_pic' => $faker->word,
        'profile_pc' => $faker->word
    ];
});
