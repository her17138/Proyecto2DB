<?php

use Illuminate\Support\Facades\Schema;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Database\Migrations\Migration;

class CreateValorsTable extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
        Schema::create('valores', function (Blueprint $table) {
            $table->integer('valorid');
            $table->integer('productoid');
            $table->integer('marcaid');
            $table->integer('atributoid');
            $table->primary('valorid');
            $table->string('valor');

            $table->foreign('productoid')
            ->references('productoid')
            ->on('productos');

            $table->foreign('marcaid')
            ->references('marcaid')
            ->on('marcas');

            $table->foreign('atributoid')
            ->references('atributoid')
            ->on('atributos');
        });
    }

    /**
     * Reverse the migrations.
     *
     * @return void
     */
    public function down()
    {
        Schema::dropIfExists('valores');
    }
}
