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

$factory->define(App\Company::class, function (Faker\Generator $faker) {
    return [
        '_user_id' => 1,
        'title' => 'SANYR SRL',
        'office_address' => 'Via piazza Cavour 5, 10124, Turin, IT',
        'office_tele' => '+39 388 472 7268',
        'description' => $faker->paragraph,
        'web_url' => 'http://www.sanyr.com',
    ];
});

$factory->define(App\Market::class, function (Faker\Generator $faker) {
    return [
        '_user_id' => 1,
        'title' => 'New York Stock Exchange',
        'description' => $faker->paragraph,
    ];
});

$factory->define(App\Stock::class, function (Faker\Generator $faker) {
    return [
        '_user_id' => 1,
        '_company_id' => 1,
        '_market_id' => 1,
        'type' => 'PREFERRED',
        'price' => $faker->numberBetween(0, 100),
        'description' => $faker->paragraph,
    ];
});