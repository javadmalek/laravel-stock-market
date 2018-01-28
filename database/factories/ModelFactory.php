<?php

/*
|--------------------------------------------------------------------------
| Model Factories
|--------------------------------------------------------------------------
|
| Here you may define all of your model factories. Model factories give
| you a convenient way to create models for testing and seeding your
| database. Just tell the factory how a default model should look.
|
*/

$factory->define(App\User::class, function (Faker\Generator $faker) {
    return [
        'name' => 'Javad Malek Shahkoohi',
        'email' => 'mrjavad@gmail.com',
        'password' => bcrypt('qwer4321'),
        'remember_token' => str_random(10),
    ];
});

$factory->define(App\Company::class, function () {
    return [
        'title' => 'SANYR SRL',
        'slug' => 'sanyr',
        'office_address' => 'Via piazza Cavour 5, 10124, Turin, IT',
        'office_tele' => '+39 388 472 7268',
        'description' => str_random(100),
        'web_url' => 'http://www.sanyr.com',
    ];
});

$factory->define(App\Market::class, function () {
    return [
        'title' => 'New York Stock Exchange',
        'description' => str_random(100),
    ];
});