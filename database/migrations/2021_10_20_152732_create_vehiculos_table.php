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
            $table->string('no_motor');
            $table->String('marca');
            $table->String('modelo');

            // llaves foraneas
            $table->UnsignedBigIncrements('id_vehiculo');
            $table->UnsignedBigIncrements('id_accidente');
            $table->UnsignedBigIncrements('id_poliza');

            $table->foreign('id_vehiculo')->references('id_vehiculo')->on('vehiculos');
            $table->foreign('id_accidente')->references('id_accidente')->on('accidentes');
            $table->foreign('id_poliza')->references('id_poliza')->on('polizas');
            


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
