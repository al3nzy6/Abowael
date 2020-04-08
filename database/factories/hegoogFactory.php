<?php

/** @var \Illuminate\Database\Eloquent\Factory $factory */

use App\Models\hegoog;
use Faker\Generator as Faker;

$factory->define(hegoog::class, function (Faker $faker) {

    return [
        'hegoog' => $faker->word
    ];
});
