<?php

// Composer: "fzaninotto/faker": "v1.3.0"
//use Faker\Factory as Faker;

class ProvinciasTableSeeder extends Seeder {

	public function run()
	{
		Provincias::create(['name' => 'Buenos Aires']);
		Provincias::create(['name' => 'Catamarca']);
		Provincias::create(['name' => 'Córdoba']);
		Provincias::create(['name' => 'El Nacional']);
		Provincias::create(['name' => 'Jujuy']);
		Provincias::create(['name' => 'Santa Fe']);
		Provincias::create(['name' => 'Santiago del Estero']);
		Provincias::create(['name' => 'Tucumán']);
	}

}