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
            $table->bigIncrements('id');
            $table->string('nropoliza');
            $table->string('patenteP');
            $table->String('fechainicio');
            $table->String('duracion');
            $table->String('tipo');
//laves foraneas
            $table->unsignedBigInteger('vendedores_id');
            $table->unsignedBigInteger('vehiculos_id');
            $table->foreign('vendedores_id')->references('id')->on('vendedores');
            $table->foreign('vehiculos_id')->references('id')->on('vehiculos');
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
