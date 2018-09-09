<?php

use Faker\Generator as Faker;

$factory->define(App\Client::class, function (Faker $faker) {
    return [
        'name'     => $faker->name,
        'email'    => $faker->unique()->email,
        'password' => bcrypt('1234'),
        'address'  => $faker->address,
    ];    
    
});
