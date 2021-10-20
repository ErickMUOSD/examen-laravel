<?php

use Illuminate\Database\Migrations\Migration;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Support\Facades\Schema;

class CreateVendedoresTable extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
        Schema::create('vendedores', function (Blueprint $table) {
            $table->bigIncrements('id_vendedor');
            $table->string('documentoV');
            $table->string('nombre');
            $table->string('domicilio');
            $table->string('telefono');
          
            //LLave foranea
            $table->unsignedBigInteger('id_sucursal');
            $table->foreign('id_sucursal')->references('id_sucurzal')->on('sucursales');
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
        Schema::dropIfExists('vendedores');
    }
}
