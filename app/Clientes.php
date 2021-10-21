<?php

namespace App;

use Illuminate\Database\Eloquent\Model;

class clientes extends Model
{
  protected $fillable = [
        'documento',
        'nombre',
        'domicilio',
        'telefono'
    ];
    public function vehiculos(){
      return $this->hasMany('App\Vehiculos');

    }


}
