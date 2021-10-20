<?php

namespace App;

use Illuminate\Database\Eloquent\Model;

class clientes extends Model
{
    public function vehiculos(){
        return $this->belongsTo('App/Vehiculos');
    }

}
