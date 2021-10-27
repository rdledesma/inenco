<?php

use Illuminate\Database\Seeder;

class IntegrantSeeder extends Seeder
{
    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run()
    {
        DB::table('integrants')->delete();

        DB::table('integrants')->insert([
            'name'=> 'Pedro Picapiedra',
            'title'=>'Becario',
            'email'=>'rdledesma1995@gmail.com',
            'description'=> 'Lic. en Análisis de Sistemas'
        ]);
        DB::table('integrants')->insert([
            'name'=> 'Rubén Darío Ledesma',
            'title'=>'Becario',
            'email'=>'rdledesma1995@gmail.com',
            'description'=> 'Lic. en Análisis de Sistemas'
        ]);
        DB::table('integrants')->insert([
            'name'=> 'Rubén Darío Ledesma',
            'title'=>'Becario',
            'email'=>'rdledesma1995@gmail.com',
            'description'=> 'Lic. en Análisis de Sistemas'
        ]);
        DB::table('integrants')->insert([
            'name'=> 'Rubén Darío Ledesma',
            'title'=>'Becario',
            'email'=>'rdledesma1995@gmail.com',
            'description'=> 'Lic. en Análisis de Sistemas'
        ]);
        DB::table('integrants')->insert([
            'name'=> 'Jack Frost',
            'title'=>'Becario',
            'email'=>'rdledesma1995@gmail.com',
            'description'=> 'Lic. en Análisis de Sistemas'
        ]);

    }
}
