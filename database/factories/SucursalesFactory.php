<?php

/** @var \Illuminate\Database\Eloquent\Factory $factory */

use App\Sucursales;
use Faker\Generator as Faker;

$factory->define(Sucursales::class, function (Faker $faker) {
    return [
        'nombre'=>$this->faker->word,
        'domicilio'=>$this->faker->word,
        'telefono'=>$this->faker->word
    ];
});
