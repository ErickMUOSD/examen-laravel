<?php

/** @var \Illuminate\Database\Eloquent\Factory $factory */

use App\Vehiculos;
use App\Clientes;
use App\Accidentes;
use Faker\Generator as Faker;

$factory->define(Vehiculos::class, function (Faker $faker) {
    return [

                'patentesV'=>$this->faker->word,
                'no_motor'=>$this->faker->word,
                'marca'=>$this->faker->word,
                'modelo'=>$this->faker->word,

                //Definir llave foranea
                'clientes_id'=> Clientes::all()->random()->id,
                'accidentes_id'=> Accidentes::all()->random()->id
            ];
        });


