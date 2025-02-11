<?php

namespace Database\Seeders;

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
        // User::factory(10)->create();
        $this->call(EstadoSeeder::class);
        $this->call(CategoriasSeeder::class);
        $this->call(FactureroSeeder::class);
        $this->call(ParametrosIvaSeeder::class);
        $this->call(FormasPagoSeeder::class);
        //Clientes::factory(20)->create();
    }
}
