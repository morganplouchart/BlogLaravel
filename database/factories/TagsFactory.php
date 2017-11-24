<?php

use Faker\Generator as Faker;

$factory->define(App\Tags::class, function (Faker $faker) {
    return [
        'label' => $faker->text(20),
    ];
});
