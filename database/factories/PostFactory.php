<?php

use Faker\Generator as Faker;

$factory->define(App\Post::class, function (Faker $faker) {
    $random = rand(1, 5);
    return [
        'title' => $faker->sentence,
        'content' => $faker->paragraph,
        'category_id' => App\Category::all()->random()->id,
        'user_id' => App\User::all()->random()->id,
        'filepath' => 'storage/uploads/'. $random .'.jpg'
    ];
});