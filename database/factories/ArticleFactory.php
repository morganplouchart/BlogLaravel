<?php

use Faker\Generator as Faker;

$factory->define(App\Article::class, function (Faker $faker) {
  return [

      'title' => $faker->Text,
      'content' => $faker->Text,
      'status' => 1,
      'published_date' => $faker->date,
      'categories_id' => rand(1,100),
  ];
});
