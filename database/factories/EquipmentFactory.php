<?php

use Faker\Generator as Faker;

$factory->define(App\Equipment::class, function (Faker $faker) {
    return [
        'name' => title_case($faker->word),
    ];
});
