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
            $table->string('patente');
            $table->string('vendedor');
            $table->String('fechainicio');
            $table->String('duracion');
            $table->String('tipo');
//laves
            $table->foreign('patente')->references('patente')->on('vehiculos');
            $table->foreign('vendedor')->references('nombre')->on('vendedores');
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
