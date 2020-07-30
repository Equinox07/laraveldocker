<?php

/** @var \Illuminate\Database\Eloquent\Factory $factory */

use App\Band;
use App\Model;
use Faker\Generator as Faker;

$factory->define(Band::class, function (Faker $faker) {
    return [
        'name' => $faker->word(),
        'description' => $faker->sentence()
    ];
});
