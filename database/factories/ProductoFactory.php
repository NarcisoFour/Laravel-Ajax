<?php

use Faker\Generator as Faker;
use App\Producto;

$factory->define(Producto::class, function (Faker $faker) {
    return [
        'nombre' => $faker->sentence(),
        'extracto' => $faker->text(140),
        'descripcion' => $faker->text(600),
    ];
});
