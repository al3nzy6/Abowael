<?php

/** @var \Illuminate\Database\Eloquent\Factory $factory */

use App\Models\ra_upload;
use Faker\Generator as Faker;

$factory->define(ra_upload::class, function (Faker $faker) {

    return [
        'userid' => $faker->randomDigitNotNull,
        'file_name' => $faker->word,
        'upload_date' => $faker->date('Y-m-d H:i:s'),
        'size' => $faker->randomDigitNotNull,
        'type' => $faker->word,
        'caption' => $faker->word
    ];
});
