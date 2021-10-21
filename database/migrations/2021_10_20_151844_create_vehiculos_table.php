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
            $table->bigIncrements('id');
            $table->string('patentesV');
            $table->string('no_motor');
            $table->String('marca');
            $table->String('modelo');

            // llaves foraneas
            $table->unsignedBigInteger('clientes_id');
            $table->unsignedBigInteger('accidentes_id');
            $table->foreign('clientes_id')->references('id')->on('clientes');
            $table->foreign('accidentes_id')->references('id')->on('accidentes');
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
