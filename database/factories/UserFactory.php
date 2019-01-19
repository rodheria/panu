<?php

use Faker\Generator as Faker;
use Faker\Provider\DateTime as DateTime;
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

$factory->define(App\User::class, function (Faker $faker) {
    return [
        // 'name', 'last_name', 'email', 'bio', 'genre', 'birthdate', 'province', 'city', 'avatar', 'password',
        'name' => $faker->name,
        'last_name' => $faker->lastName,
        'email' => $faker->unique()->safeEmail,
        'bio' => $faker->paragraph(),
        'genre' => random_int(0, 3),
        'birthdate' => DateTime::dateTimeThisCentury($max = 'now', $timezone = null),
        'province' => random_int(0, 23),
        'city' => random_int(0, 5),
        'email_verified_at' => now(),
        'password' => '$2y$10$TKh8H1.PfQx37YgCzwiKb.KjNyWgaHb9cbcoQgdIVFlYg7B77UdFm', // secret
        'remember_token' => str_random(10),
        //MODIFY
    ];
});
