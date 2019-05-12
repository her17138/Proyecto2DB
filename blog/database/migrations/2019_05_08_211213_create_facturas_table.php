<?php

use Illuminate\Support\Facades\Schema;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Database\Migrations\Migration;

class CreateFacturasTable extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
        Schema::create('facturas', function (Blueprint $table) {
            $table->integer('facturaid');
            $table->integer('clienteNIT');
            $table->primary('facturaid');
            $table->date('fecha');
            $table->string('direccion');
            $table->decimal('total', 10, 3);
            
            $table->foreign('clienteNIT')
            ->references('clienteNIT')
            ->on('clientes');
        });
    }

    /**
     * Reverse the migrations.
     *
     * @return void
     */
    public function down()
    {
        Schema::dropIfExists('facturas');
    }
}
