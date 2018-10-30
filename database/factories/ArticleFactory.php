<?php

use Faker\Generator as Faker;

/*
|--------------------------------------------------------------------------
| Model Factories
|--------------------------------------------------------------------------
|
| This directory should contain each of the model factory definitions for
| your application. Factories provide a convenient way to generate new
| model instances for testing / seeding your application's database.
|
*/

$factory->define(App\Models\Article::class, function (Faker $faker) {
    $images = [
        'http://heijing.chuangzaoshi.com/wp-content/uploads/2017/07/1.png',
        'http://heijing.chuangzaoshi.com/wp-content/uploads/2017/07/2.png',
        'http://heijing.chuangzaoshi.com/wp-content/uploads/2017/07/3.png',
        'http://heijing.chuangzaoshi.com/wp-content/uploads/2017/07/4.png',
        'http://heijing.chuangzaoshi.com/wp-content/uploads/2017/07/5.png',
        'http://heijing.chuangzaoshi.com/wp-content/uploads/2017/07/6.png',
        'http://heijing.chuangzaoshi.com/wp-content/uploads/2017/07/7.png',
        'http://heijing.chuangzaoshi.com/wp-content/uploads/2017/07/8.png',
    ];

    $updated_at = $faker->dateTimeThisMonth();

    $created_at = $faker->dateTimeThisMonth($updated_at);

    return [
        'title' => $faker->title,
        'content' => $faker->text,
        'html' => $faker->text,
        'cover' => $faker->randomElement($images),
        'created_at' => $created_at,
        'updated_at' => $updated_at
    ];
});
