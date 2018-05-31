<?php

use Faker\Generator as Faker;

$factory->define(App\Equipment::class, function (Faker $faker) {
    return [
        'name' => title_case($faker->word),
        'lv' => $faker->numberBetween(1, 50),
        'str' => $faker->numberBetween(1, 255),
        'agi' => $faker->numberBetween(1, 255),
        'vit' => $faker->numberBetween(1, 255),
        'wil' => $faker->numberBetween(1, 255),
        'wis' => $faker->numberBetween(1, 255),
    ];
});
