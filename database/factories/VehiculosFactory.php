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
                'id_cliente'=> Clientes::all()->random()->id_cliente,
                'id_accidente'=> Accidentes::all()->random()->id_accidente

            ];
        });
        
    
