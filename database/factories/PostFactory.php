<?php

use Faker\Generator as Faker;

$factory->define(App\Post::class, function (Faker $faker) {
    return [
        'title' => $faker->sentence(5),
        'content' => $faker->text(),
        'category' => $faker->randomElement($array = array ('asian','vego','pasta', 'children', 'easy')),
        'user_id' => 1,
    ];
});