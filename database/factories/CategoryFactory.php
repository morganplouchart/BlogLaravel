<?php

use Faker\Generator as Faker;

$factory->define(App\Category::class, function (Faker $faker) {

    return [

        'label' => $faker->text(20),

    ];
});
