<?php

/** @var \Illuminate\Database\Eloquent\Factory $factory */

use App\Models\sms_recieved;
use Faker\Generator as Faker;

$factory->define(sms_recieved::class, function (Faker $faker) {

    return [
        'number' => $faker->word,
        'name' => $faker->word,
        'sms_groups_id' => $faker->randomDigitNotNull
    ];
});
