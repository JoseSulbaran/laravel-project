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

		//$this->call(UsuarioSeeder::class);
		//$this->call('UsuarioSeeder');
	    Model::unguard();

	    $seeder = [
	    	'UsuarioSeeder',
	    ];

	    foreach($seeder as $seed ) {
	    	$this->call($seed);
	    }
	    
	    Model::reguard();    	

        $this->command->info('Se cargo la data en la tablas estatis!');
    }
}
