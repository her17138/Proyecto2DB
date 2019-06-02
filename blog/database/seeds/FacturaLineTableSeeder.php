<?php

use Illuminate\Database\Seeder;

class FacturaLineTableSeeder extends Seeder
{
    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run()
    {
        factory(App\LineaFactura::class, 5000)->create()->each(function($LineFac){
            $LineFac->save();
            });
    }
}
