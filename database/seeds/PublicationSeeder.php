<?php

use Illuminate\Database\Seeder;

class PublicationSeeder extends Seeder
{
    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run()
    {
        DB::table('publications')->delete();


        DB::table('publications')->insert([
            'title'=>'Un proyecto para monitorear la aparición de nuevas mutaciones del SARS-CoV-2 a nivel local',
            'description'=>'Los virus mutan de forman permanente y así dan lugar al surgimiento de distintas variantes del mismo patógeno. Esto puede conducir, como ha sucedido en el caso de la pandemia de COVID-19, a que algunas de las variantes que aparecen tengan mayor facilidad para propagarse, generen formas más severas de la enfermedad o posean una mayor capacidad para escapar al sistema inmune. Estas mutaciones son conocidas como variantes preocupantes o VOC, por sus siglas en inglés (variants of concern). Un ejemplo de VOC es la llamada variante Delta del SARS-CoV-2, que es más trasmisible, genera una carga viral más alta y causa una patología de mayor severidad.',
            'copete'=> 'Ana Peinetti fue galardonada con la Beca L’Oréal-UNESCO 2021 por un desarrollo que apunta a detectar tempranamente la presencia en el país de variantes preocupantes del virus que causa el COVID-19.',
            'image_1' => 'https://www.conicet.gov.ar/wp-content/uploads/Premios-Merk-018-web.jpg'

        ]);

    }
}
