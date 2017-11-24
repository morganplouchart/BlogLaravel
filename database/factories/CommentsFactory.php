<?php

use Faker\Generator as Faker;

$factory->define(App\Comments::class, function (Faker $faker) {
    return [

      'name' => $faker->Name,
      'email' => $faker->Email,
      'content' => $faker->Text,
      'status' => 1,
      'published_date' => $faker->date,

    ];
});
