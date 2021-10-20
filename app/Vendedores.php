<?php

namespace App;

use Illuminate\Database\Eloquent\Model;

class Vendedores extends Model
{
    public function sucursales (){

        return $this->belongsTo('sucursales');
    }
}
