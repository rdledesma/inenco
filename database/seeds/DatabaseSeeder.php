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
        $this->call(IntegrantSeeder::class);
        $this->call(PublicationSeeder::class);
        $this->call(MessageSeeder::class);
        $this->call(AdSeeder::class);

        $this->call(ProyectSeeder::class);
    }
}
