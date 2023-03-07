<?php

namespace Database\Seeders;

use App\Models\Accesorio;
use App\Models\Bijouterie;
use App\Models\Lenceria;
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
        /*
        Llamamos los seeders de las tablas de la BD
        $this->call(AccesorioSeeder::class);
        $this->call(BijouterieSeeder::class);
        $this->call(LenceriaSeeder::class);
        */

        // \App\Models\User::factory(10)->create();
        /*
        */
        Accesorio::factory(20)->create(); //Se crean 20 registros con datos al azar en la tabla Accesorio
        Bijouterie::factory(20)->create(); //Se crean 20 registros con datos al azar en la tabla Bijouterie
        Lenceria::factory(20)->create(); //Se crean 20 registros con datos al azar en la tabla Lenceria
    }
}
