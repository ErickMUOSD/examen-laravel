<?php

/** @var \Illuminate\Database\Eloquent\Factory $factory */

use App\Vendedores;
use App\Sucursales;
use Faker\Generator as Faker;


$factory->define(Vendedores::class, function (Faker $faker) {
    return [

            'documentoV'=>$this->faker->word,
             'nombre'=>$this->faker->word,
         'domicilio'=>$this->faker->word,
         'telefono'=>$this->faker->word,
           'id_sucursal'=> Sucursales::all()->random()->id_sucursales

    ];
});
