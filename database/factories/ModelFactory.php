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

/** @var \Illuminate\Database\Eloquent\Factory $factory */
$factory->define(estoque\User::class, function (Faker\Generator $faker) {
    static $password;

    return [
        'name' => $faker->name,
        'email' => $faker->unique()->safeEmail,
        'password' => $password ?: $password = bcrypt('secret'),
        'remember_token' => str_random(10),
    ];
});

$factory->define(estoque\Produto::class, function (Faker\Generator $faker) {
    return [
        'nome' => $faker->randomElement(['Geladeira', 'Fogao', 'Microondas', 'Torradeira']),
        'valor' => $faker->randomElement([100.00, 200.00, 300.00, 400.00]),
        'descricao' => $faker->randomElement(['tucuruvi', 'santana', 'carandiru']),
        'quantidade' => $faker->randomElement([10, 20, 30, 40]),
    ];
});
