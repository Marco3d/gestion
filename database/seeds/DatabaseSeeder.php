<?php

use Illuminate\Database\Seeder;
use Illuminate\Database\Eloquent\Model;

class DatabaseSeeder extends Seeder
{
    /**
     * Run the database seeds.
     *
     * @return void
     */

    
        


    public function run()
    {
          Model::unguard();

        DB::table('cursos')->insert([
            'name' => '601',
         ]);

        DB::table('cursos')->insert([
            'name' => '602',
         ]);

        DB::table('cursos')->insert([
            'name' => '603',
         ]);

        DB::table('cursos')->insert([
            'name' => '701',
         ]);

        DB::table('cursos')->insert([
            'name' => '702',
         ]);

        DB::table('cursos')->insert([
            'name' => '703',
         ]);
    




        factory('App\User','admin', 3)->create();
        factory('App\User','docente', 50)->create();
        
        factory('App\Estudiante',240)->create();


        Model::reguard();
    }
}
