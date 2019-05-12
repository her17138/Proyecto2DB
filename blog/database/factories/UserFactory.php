<?php

/** @var \Illuminate\Database\Eloquent\Factory $factory */
use App\User;
use Illuminate\Support\Str;
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

$factory->define(User::class, function (Faker $faker) {
    return [
        'name' => $faker->name,
        'email' => $faker->unique()->safeEmail,
        'email_verified_at' => now(),
        'password' => '$2y$10$92IXUNpkjO0rOQ5byMi.Ye4oKoEa3Ro9llC/.og/at2.uheWG/igi', // password
        'remember_token' => Str::random(10),
    ];
});

$factory->define(App\Cliente::class, function(Faker $faker) {
    return [
    'clienteNIT' => $faker->unique()->randomNumber(7),
    'Nombre' => $faker->firstName(),
    'Apellido' => $faker -> lastName(),
    'Telefono' => $faker -> randomNumber(7),
    'Direccion' => $faker -> streetAddress(),
    ];
});

$factory->define(App\Factura::class, function(Faker $faker) {

    $client = App\Cliente::all()->pluck('clienteNIT')->toArray();
    return [
    'clienteNIT' => $faker->randomElement($client),
    'direccion' => $faker -> streetAddress(),
    'total' => $faker -> randomNumber(3),
    ];
});