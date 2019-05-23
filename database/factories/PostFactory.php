<?php

use Faker\Generator as Faker;

$factory->define(App\Post::class, function (Faker $faker) {
    return [
        'title' => $faker->sentence(5),
        'content' => $faker->text(),
        'category' => $faker->randomElement($array = array ('asian','vego','pasta', 'children', 'easy')),
        'image'=> $faker->imageUrl($width = 640, $height = 480, 'food'),
        'user_id' => 1,
    ];
});