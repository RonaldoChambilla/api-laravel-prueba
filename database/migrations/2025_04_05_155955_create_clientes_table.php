<?php

use Illuminate\Database\Migrations\Migration;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Support\Facades\Schema;

return new class extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
        Schema::create('clientes', function (Blueprint $table) {
            $table->id();
            $table->string('nombres');
            $table->string('apellidos');
            $table->string('razonsocial');
            $table->string('numerodocumento');
            $table->string('telefono');
            $table->boolean('pago_realizado')->default(false);
            $table->string('correoelectronico');
            $table->unsignedBigInteger('tipo_persona_id');
            $table->foreign('tipo_persona_id')
              ->references('id')
              ->on('tipopersonacliente')
              ->onDelete('cascade');

            $table->unsignedBigInteger('tipo_documento_id');

            $table->foreign('tipo_documento_id')
              ->references('id')
              ->on('tipodocumentocliente')
              ->onDelete('cascade');
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
        Schema::dropIfExists('clientes');
    }
};
