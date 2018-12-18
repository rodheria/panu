<?php

use Faker\Generator as Faker;

$factory->define(App\Comment::class, function (Faker $faker) {
    return [
        'comment' => $faker->paragraph,
        'post_id' => App\Post::all()->random()->id,
        'user_id' => App\User::all()->random()->id
    ];
});
