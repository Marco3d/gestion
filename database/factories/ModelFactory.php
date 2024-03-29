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


$factory->defineAs(App\User::class, 'admin', function ($faker) {
    return [
        'name' => $faker->name,
        'email' => $faker->email,
        'password' => bcrypt('123'),
        'type' => 'admin',
        'remember_token' => str_random(10),
    ];
});

$factory->defineAs(App\User::class, 'docente', function ($faker) {
    return [
        'name' => $faker->name,
        'email' => $faker->email,
        'password' => bcrypt('123'),
        'type' => 'docente',
        'remember_token' => str_random(10),
    ];
});




$factory->define(App\Estudiante::class, function ($faker) {
    return [
        'name' => $faker->name,
        'curso_id' => App\Curso::all()->random()->id,
        
    ];
});