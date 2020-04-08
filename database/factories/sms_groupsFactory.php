<?php

/** @var \Illuminate\Database\Eloquent\Factory $factory */

use App\Models\sms_groups;
use Faker\Generator as Faker;

$factory->define(sms_groups::class, function (Faker $faker) {

    return [
        'name' => $faker->word,
        'description' => $faker->word,
        'publish' => $faker->randomDigitNotNull
    ];
});
