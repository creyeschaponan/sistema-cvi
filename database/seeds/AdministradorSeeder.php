<?php

use Illuminate\Database\Seeder;
use App\User;
use App\Persona;

class AdministradorSeeder extends Seeder
{
    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run()
    {
    	Persona::create([
    		'nombre' => 'Cristian Reyes Chapoñan',
    		'tipo_documento' => 'DNI',
    		'num_documento' => '72737700',
    		'direccion' => 'Arica 1931 campodonico',
    		'telefono' => '976380729',
    		'email' => 'creyeschaponan@gmail.com'
    	]);
 
        User::create([
        	'id' => '1',
        	'usuario' => 'admin',
        	'password' => '$2y$10$TKh8H1.PfQx37YgCzwiKb.KjNyWgaHb9cbcoQgdIVFlYg7B77UdFm', //secret
        	'condicion' => '1',
        	'idrol' => '1',
        	'remember_token' => str_random(10)
        ]);
    }
}
