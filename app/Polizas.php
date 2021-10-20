<?php

namespace App;

use Illuminate\Database\Eloquent\Model;

class Polizas extends Model
{
    public  function vehiculos(){
        return $this->hasMany('App\Vehiculos');
    }
    public  function vendedores(){
        return $this->hasMany('App\Vendedores');

}
}
