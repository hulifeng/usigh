<?php

use Faker\Generator as Faker;

$factory->define(\App\Comment::class, function (Faker $faker) {
    return [
        'content' => $faker->text,
        'author' => str_random(8),
        'email' => $faker->email,
        'url' => $faker->url,
        'parent_id' => 0
    ];
});
