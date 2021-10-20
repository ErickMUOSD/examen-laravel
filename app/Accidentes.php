<?php

namespace App;

use Illuminate\Database\Eloquent\Model;

class Accidentes extends Model
{
    public function vehiculos(){
        return $this->belongsTo ('vehiculos');
    } 
}
