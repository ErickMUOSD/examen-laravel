<?php

namespace App;

use Illuminate\Database\Eloquent\Model;
use App\Clientes;
use App\Accidentes;

class Vehiculos extends Model
{
    public function cliente(){

        return $this->hasMany('App/Clientes');
    }

    public function accidentes(){
        
        return $this->hasMany('App/Accidentes');
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

