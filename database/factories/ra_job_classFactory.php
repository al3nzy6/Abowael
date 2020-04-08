<?php

/** @var \Illuminate\Database\Eloquent\Factory $factory */

use App\Models\ra_job_class;
use Faker\Generator as Faker;

$factory->define(ra_job_class::class, function (Faker $faker) {

    return [
        'takhsos' => $faker->word,
        'description' => $faker->text,
        'publish' => $faker->randomDigitNotNull
    ];
});
