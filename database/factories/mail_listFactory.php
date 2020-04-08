<?php

/** @var \Illuminate\Database\Eloquent\Factory $factory */

use App\Models\mail_list;
use Faker\Generator as Faker;

$factory->define(mail_list::class, function (Faker $faker) {

    return [
        'email' => $faker->word
    ];
});
