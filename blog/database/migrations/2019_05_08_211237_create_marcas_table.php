<?php

use Illuminate\Support\Facades\Schema;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Database\Migrations\Migration;

class CreateMarcasTable extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
        Schema::create('marcas', function (Blueprint $table) {
            $table->increments('marcaid');
            //$table->primary('marcaid');
            $table->integer('categoriaid')->nullable();
            $table->integer('productoid');
            $table->string('nombre');
            $table->decimal('precio', 10, 3);
            $table->integer('cantidad');

            $table->foreign('productoid')
            ->references('productoid')
            ->on('productos');

            $table->foreign('categoriaid')
            ->references('categoriaid')
            ->on('categorias');
        });
    }

    /**
     * Reverse the migrations.
     *
     * @return void
     */
    public function down()
    {
        Schema::dropIfExists('marcas');
    }
}
