<?php

namespace App;

use Illuminate\Database\Eloquent\Model;

class Sucursales extends Model
{
     //Definien los campos de la tabla
     protected $fillable = [
        'nombre',
        'domicilio',
        'telefono',
    ];


    public function vendedores(){
        return $this->belongsTo('App/Vendedores');
    }
}