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
    $email= $faker->email;
    return [
        'name' => $faker->unique()->userName,
        'email' => $email,
        'password' => bcrypt($email),
        'remember_token' => str_random(10),
        'firstname' => $faker->firstName,
        'lastname' => $faker->lastName,
        'birthdate' => \Carbon\Carbon::now()->toDateTimeString()
    ];
});
