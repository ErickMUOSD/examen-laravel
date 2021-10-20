<?php

namespace App;

use Illuminate\Database\Eloquent\Model;

class Vendedores extends Model
{
    public function sucursales (){

        return $this->hasMany('App/Sucursales');
    }
    public function poliza (){

        return $this->belongsTo('App/Polizas');
    }
}
