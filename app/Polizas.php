<?php

namespace App;

use Illuminate\Database\Eloquent\Model;

class Polizas extends Model
{

    protected $fillable = [
'nropoliza',
'patenteP',
'fechainicio',
'duracion',
'tipo',
'id_vendedor',
'id_vehiculo',
];
    public  function vehiculos(){
        return $this->hasMany('App\Vehiculos');
    }
    public  function vendedores(){
        return $this->hasMany('App\Vendedores');

}
}
