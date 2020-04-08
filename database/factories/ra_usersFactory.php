<?php

/** @var \Illuminate\Database\Eloquent\Factory $factory */

use App\Models\ra_users;
use Faker\Generator as Faker;

$factory->define(ra_users::class, function (Faker $faker) {

    return [
        'first_name' => $faker->word,
        'last_name' => $faker->word,
        'email_address' => $faker->word,
        'username' => $faker->word,
        'password' => $faker->word,
        'info' => $faker->text,
        'user_level' => $faker->word,
        'signup_date' => $faker->date('Y-m-d H:i:s'),
        'last_login' => $faker->date('Y-m-d H:i:s'),
        'activated' => $faker->word,
        'upload_no' => $faker->randomDigitNotNull
    ];
});
