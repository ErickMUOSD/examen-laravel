<?php

namespace App;

use Illuminate\Database\Eloquent\Model;
use Illuminate\Database\Eloquent\SoftDeletes;
class clientes extends Model
{
use SoftDeletes;
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
