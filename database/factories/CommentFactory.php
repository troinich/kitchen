<?php

use App\Comment;
use Faker\Generator as Faker;

$factory->define(App\Comment::class, function (Faker $faker) {
    return [
        'content' => $faker->realText(rand(10,200)),
        'user_id' => 1,
        'post_id'=>$faker->numberBetween($min = 1, $max = 300),
    ];
});