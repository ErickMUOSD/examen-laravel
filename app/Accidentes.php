<?php

namespace App;

use Illuminate\Database\Eloquent\Model;

class Accidentes extends Model
{
    public function vehiculos(){
        return $this->hasMany('App\Vehiculos');
    }

    //Definien los campos de la tabla
    protected $fillable = [
            'patente',
            'lugar',
            'descripcion'
    ];


}

