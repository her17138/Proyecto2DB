<?php

use Illuminate\Database\Seeder;

class FacturaTableSeeder extends Seeder
{
    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run()
    {
        factory(App\Factura::class, 500)->create()->each(function($fact){
            $fact->save();
            });
    }
}
