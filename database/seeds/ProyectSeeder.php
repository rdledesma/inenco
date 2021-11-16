<?php

use Illuminate\Database\Seeder;

class ProyectSeeder extends Seeder
{
    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run()
    {
        DB::table('proyects')->delete();


        DB::table('proyects')->insert([
            'name'=>'Un proyecto para monitorear la aparición de nuevas mutaciones del SARS-CoV-2 a nivel local',
            'state' => 'active'
        ]);



        DB::table('proyects')->insert([
            'name'=>'<strong>CSIC Grupos I+D (2019-2022):</strong> Caracterización del recurso solar y desarrollo de aplicaciones para el uso eficiente de la energía solar. Responsable: R. Alonso Suárez.',
            'state' => 'active'
        ]);

        DB::table('proyects')->insert([
            'name'=>'<strong>CSIC Grupos I+D (2015-2018):</strong>&nbsp;Caracterización del recurso solar y desarrollo de aplicaciones para el uso eficiente de la energía solar. Responsable: G. Abal',
            'state' => 'executed'
        ]);
    }
}
