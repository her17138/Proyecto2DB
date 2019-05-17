<?php

use Illuminate\Database\Seeder;
use App\Cliente;
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
        $this->call(CategoriaTableSeeder::class);
        $this->call(MarcaTableSeeder::class);
        $this->call(ClienteTableSeeder::class);
        $this->call(FacturaTableSeeder::class);
        $this->call(FacturaLineTableSeeder::class);
    }
}
