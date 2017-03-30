<?php

use Illuminate\Database\Seeder;
use App\Genero;

class UsuarioSeeder extends Seeder
{
    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run()
    {
        

        /*DB::table('genero')->insert(array(
             array('sexo'=>'M','descripcion'=>'Masculino'),
             array('sexo'=>'F','descripcion'=>'Femenino'),
  
          )); 
        */

		DB::table('genero')->delete();

	    $generos = [
	        [
        	 'sexo' => 'M',
             'descripcion' => 'Masculino'
	        ],
	        [
        	 'sexo' => 'F',
             'descripcion' => 'Femenino'
	        ]
	    ];
	    
	    foreach ($generos as $genero){
	        //Genero::create($genero);
            DB::table('genero')->insert($genero); 
	    }


    }
}
