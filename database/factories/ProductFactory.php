<?php

use Faker\Generator as Faker;

$factory->define(App\Product::class, function (Faker $faker) {
    return [
        'code'  => md5(microtime()),
        'name'  => $faker->name,
        'price' => $faker->randomFloat(2, 30.0, 200.0), // secret
        'about' => $faker->text(300),
    ];    
});
