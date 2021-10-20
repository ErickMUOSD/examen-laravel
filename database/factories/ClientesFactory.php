<?php

/** @var \Illuminate\Database\Eloquent\Factory $factory */

use App\Clientes;
use Faker\Generator as Faker;

$factory->define(Clientes::class, function (Faker $faker) {
    return [
        'documento'=>$this->faker->word,
        'nombre'=>$this->faker->word,
        'domicilio'=>$this->faker->word,
        'telefono'=>$this->faker->word
    ];
});
