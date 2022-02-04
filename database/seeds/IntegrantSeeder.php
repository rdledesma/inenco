<?php
use Illuminate\Support\Str;
use Illuminate\Database\Seeder;
use Illuminate\Support\Facades\Hash;
class IntegrantSeeder extends Seeder
{
    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run()
    {


        DB::table('users')->insert([
            'name' => 'Ruben Ledesma',
            'email' => 'rdledesma1995@gmail.com',
            'password' => Hash::make('123123'),
            'remember_token' => Str::random(10),
        ]);


        DB::table('users')->insert([
            'name' => 'Roxana',
            'email' => 'roxana@geers.com',
            'password' => Hash::make('123123'),
            'remember_token' => Str::random(10),
        ]);

        DB::table('integrants')->insert([
            'user_id' => 1,
            'charge' => 'Becario',
            'description' => 'Lic. en Análisis de Sistemas',
        ]);



        DB::table('integrants')->insert([
            'user_id' => 2,
            'charge' => 'Becaria',
            'description' => 'Lic. FI',
        ]);

    }
}
