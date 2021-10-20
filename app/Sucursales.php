<?php

namespace App;

use Illuminate\Database\Eloquent\Model;

class Sucursales extends Model
{
    public function vendedores(){
        return $this->belongsTo('vendedores_clase');
    }
}
