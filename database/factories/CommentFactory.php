<?php

use App\Comment;
use Faker\Generator as Faker;

//create faked data by faker
$factory->define(App\Comment::class, function (Faker $faker) {
    return [
        'content' => $faker->realText(rand(10,200)),
    ];
});