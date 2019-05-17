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
            $table->increments('facturaid');
            $table->string('clienteNIT');
            //$table->primary('facturaid');
            $table->string('direccion');
            $table->decimal('total', 10, 3);
            $table->timestamps();
            $table->foreign('clienteNIT')
            ->references('clienteNIT')
            ->on('clientes');
        });

        //procedure.. de offset

        DB::unprepared(
            "CREATE OR REPLACE PROCEDURE offsetDays(mult int)
            LANGUAGE plpgsql    
            AS $$
            BEGIN
                UPDATE facturas
                SET created_at= created_at + mult * INTERVAL '1 day'; 
             
                COMMIT;
            END;
            $$;"
        );
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
