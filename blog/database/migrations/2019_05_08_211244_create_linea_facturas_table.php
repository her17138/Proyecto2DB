<?php

use Illuminate\Support\Facades\Schema;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Database\Migrations\Migration;

class CreateLineaFacturasTable extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
        Schema::create('linea_facturas', function (Blueprint $table) {
            $table->integer('lineaid');
            $table->integer('productoid');
            $table->integer('marcaid');
            $table->integer('facturaid');
            $table->primary('lineaid');
            $table->integer('cantidad');
            $table->decimal('preciounitario', 10, 3);

            $table->foreign('productoid')
            ->references('productoid')
            ->on('productos');

            $table->foreign('marcaid')
            ->references('marcaid')
            ->on('marcas');

            $table->foreign('facturaid')
            ->references('facturaid')
            ->on('facturas');
        });
    }

    /**
     * Reverse the migrations.
     *
     * @return void
     */
    public function down()
    {
        Schema::dropIfExists('linea_facturas');
    }
}
