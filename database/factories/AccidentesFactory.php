<?php

/** @var \Illuminate\Database\Eloquent\Factory $factory */

use App\Accidentes;
use Faker\Generator as Faker;

$factory->define(Accidentes::class, function (Faker $faker) {
    return [
        'patente'=>$this->faker->sentence(),
        'lugar'=>$this->faker->sentence(),
        'descripcion'=>$this->faker->randomElement(['grave','moderado'])
    ];
});
