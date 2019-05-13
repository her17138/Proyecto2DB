<?php

use Illuminate\Database\Seeder;

class DatabaseSeeder extends Seeder
{
    /**
     * Seed the application's database.
     *
     * @return void
     */
    public function run()
    {
        $this->call(ProductoTableSeeder::class);
        $this->call(MarcaTableSeeder::class);
        $this->call(CategoriaTableSeeder::class);
        $this->call(ClienteTableSeeder::class);
        $this->call(FacturaTableSeeder::class);
        $this->call(FacturaLineTableSeeder::class);
    }
}
