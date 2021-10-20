<?php

namespace App;

use Illuminate\Database\Eloquent\Model;


class Vendedores extends Model
{

    protected $fillable = [
'documentoV',
'nombre',
'domicilio',
'telefono',
'id_sucursal'
    ];
    public function sucursales (){

        return $this->hasMany('App/Sucursales');
    }
    public function poliza (){

        return $this->belongsTo('App/Polizas');
    }
}
