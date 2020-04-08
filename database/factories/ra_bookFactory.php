<?php

/** @var \Illuminate\Database\Eloquent\Factory $factory */

use App\Models\ra_book;
use Faker\Generator as Faker;

$factory->define(ra_book::class, function (Faker $faker) {

    return [
        'title' => $faker->word,
        'puplish_date' => $faker->word,
        'puplish_house' => $faker->word,
        'about_book' => $faker->text,
        'book_link' => $faker->word,
        'cover_link' => $faker->word,
        'hegoog' => $faker->randomDigitNotNull
    ];
});
