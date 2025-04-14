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
        Schema::create('productos', function (Blueprint $table) {
            $table->id();
            $table->string('codigo');
            $table->string('descripcion');
            $table->string('precio');
            $table->string('stock');
            $table->unsignedBigInteger('familia_id');

            $table->foreign('familia_id')
              ->references('id')
              ->on('familiaproducto')
              ->onDelete('cascade');

            $table->unsignedBigInteger('marca_id');

            $table->foreign('marca_id')
              ->references('id')
              ->on('marcaproducto')
              ->onDelete('cascade');

            $table->unsignedBigInteger('unidad_medida_id');

            $table->foreign('unidad_medida_id')
                ->references('id')
                ->on('unidadmedidaproducto')
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
        Schema::dropIfExists('productos');
    }
};
