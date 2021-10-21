<?php

namespace App;
use App\Clientes;
use Illuminate\Database\Eloquent\Model;


class Vehiculos extends Model
{

    public function clientes(){

      return $this->belongsTo('App\Clientes');
    }

    public function accidentes(){

        return $this->belongsTo ('App\Accidentes');
    }
public function polizas(){

        return $this->hasMany ('App\Polizas');
    }
    protected $fillable = [


        'patentesV',
        'no_motor',
        'marca',
        'modelo',
        'id_cliente',
        'id_accidente'

        ];

}

