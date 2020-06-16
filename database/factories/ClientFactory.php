<?php

/** @var \Illuminate\Database\Eloquent\Factory $factory */

use App\Models\Client;
use Faker\Generator as Faker;
use Illuminate\Support\Str;

$factory->define(Client::class, function (Faker $faker) {
    return [
        'name' => $faker->name,
        'email' => $faker->email,
        'phone' => rand(900000000,999999999),
        'defaulter' => rand(1,10) % 2 == 0 ? 's':'n',
        'date_birth' => $faker->date(),
        'sex' => rand(1,10) % 2 == 0 ? 'm' : 'f',
        'marital_status' => rand(1,3),
        'physical_disability' => rand(1,10) % 2 == 0 ? 's' : 'n',
        'cpf' => rand(1000000000,2000000000), 
    ];
});
