<?php

use App\Comment;
use Faker\Generator as Faker;

//create faked data by faker
$factory->define(App\Comment::class, function (Faker $faker) {
    return [
        'content' => $faker->realText(rand(10,200)),
        'user_id' => $faker->numberBetween($min = 1, $max = 6),
        'post_id'=>$faker->numberBetween($min = 1, $max = 300),
    ];
});