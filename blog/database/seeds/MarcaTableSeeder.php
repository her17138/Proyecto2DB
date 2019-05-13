<?php

use Illuminate\Database\Seeder;

class MarcaTableSeeder extends Seeder
{
    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run()
    {
        factory(App\Marca::class, 25)->create()->each(function($marca){
            $marca->save();
            });
    }
}
