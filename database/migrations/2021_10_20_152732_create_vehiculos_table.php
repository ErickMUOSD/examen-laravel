<?php

use Illuminate\Database\Migrations\Migration;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Support\Facades\Schema;

class CreateVehiculosTable extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
        Schema::create('vehiculos', function (Blueprint $table) {
            $table->bigIncrements('id_vehiculo');
            $table->string('patentesV');
            $table->string('no_motor');
            $table->String('marca');
            $table->String('modelo');

            // llaves foraneas
            $table->unsignedBigInteger('id_cliente');
            $table->unsignedBigInteger('id_accidente');
            $table->foreign('id_cliente')->references('id_cliente')->on('clientes');
            $table->foreign('id_accidente')->references('id_accidente')->on('accidentes');
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
        Schema::dropIfExists('vehiculos');
    }
}
