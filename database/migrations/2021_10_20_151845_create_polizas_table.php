<?php

use Illuminate\Database\Migrations\Migration;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Support\Facades\Schema;

class CreatePolizasTable extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
        Schema::create('polizas', function (Blueprint $table) {
            $table->bigIncrements('id_poliza');
            $table->bigInteger('nropoliza');
            $table->string('patenteP');
            $table->String('fechainicio');
            $table->String('duracion');
            $table->String('tipo');
//laves foraneas
            $table->unsignedBigInteger('id_vendedor');
            $table->unsignedBigInteger('id_vehiculo');  
            $table->foreign('id_vendedor')->references('id_vendedor')->on('vendedores');
            $table->foreign('id_vehiculo')->references('id_vehiculo')->on('vehiculos');
            $table->timestamps();
     
        });
    }

    /**
     * Reverse the migrations.
     *
     * @return void
     */
    public function down()
    {
        Schema::dropIfExists('polizas');
    }
}
