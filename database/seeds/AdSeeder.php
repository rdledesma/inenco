<?php

use Illuminate\Database\Seeder;

class AdSeeder extends Seeder
{
    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run()
    {
        DB::table('ads')->delete();

        DB::table('ads')->insert([
            'content' => '<p>Bienvenido al sitio web del Laboratorio de Energía Solar de la Universidad de la República (LES/UdelaR).</p>
            <p>Trabajamos para lograr un conocimiento detallado del recurso solar con que cuenta el Uruguay. Este conocimiento es un insumo fundamental para el dimensionamiento, diseño y evaluación de equipamientos que buscan el aprovechamiento energético del recurso solar.</p>
            <p><a href="http://les.edu.uy/pub/Video_LES_FCC2017.mp4">Video sobre algunas de las actividades realizadas</a> en el LES, elaborado por equipo de docentes de la Fac. de Ciencias de la Comunicación de UDELAR para el Ciclo «Mas Universidad» emitido por TNU.</p>
            <p>En el laboratorio se desarrollan actualmente las siguientes líneas de trabajo.</p>
            <ul>
            <li>Operación y mantenimiento de la Red de Medidas Continuas de Radiación Solar.</li>
            <li>Calibración de radiómetros bajo norma.</li>
            <li>Modelado y pronóstico del recurso solar por satélite.</li>
            <li>Investigación en prototipos para aplicación en energía solar térmica.</li>
            <li>Técnicas de aprovechamiento solar pasivo.</li>
            </ul>
            <p>'
        ]);
    }
}
