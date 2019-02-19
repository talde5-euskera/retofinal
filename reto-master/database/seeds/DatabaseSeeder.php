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
 
        $this->call(AlumnoTableSeeder::class);

        $this->call(ProfesorTableSeeder::class);

        $this->call(OfertaTableSeeder::class);

       
    }
}
