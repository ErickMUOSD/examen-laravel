<?php

namespace App;

use Illuminate\Database\Eloquent\Model;

class Vehiculos extends Model
{
    public function cliente(){

        return $this->hasMany('App/Clientes');
    }

    public function accidentes(){
        
        return $this->hasMany('App/Accidentes');
    }
}

