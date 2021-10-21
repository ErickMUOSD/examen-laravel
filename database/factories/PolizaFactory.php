<?php

/** @var \Illuminate\Database\Eloquent\Factory $factory */

use App\Vendedores;
use App\Vehiculos;
use App\Polizas;
use Faker\Generator as Faker;

$factory->define(\App\Polizas::class, function (Faker $faker) {
    return [
         'nropoliza'=>$this->faker->word,
        'patenteP'=>$this->faker->word,
        'fechainicio'=>$this->faker->word,
         'duracion'=>$this->faker->word,
        'tipo'=>$this->faker->word,
        'vendedores_id'=> Vendedores::all()->random()->id,
          'vehiculos_id'=> Vehiculos::all()->random()->id
    ];
});
