<?php

// Composer: "fzaninotto/faker": "v1.3.0"
//use Faker\Factory as Faker;

class ProvinciaTableSeeder extends Seeder {

	public function run()
	{
		Provincia::create(['name' => 'Todas']);
		Provincia::create(['name' => 'Buenos Aires']);
		Provincia::create(['name' => 'Catamarca']);
		Provincia::create(['name' => 'Córdoba']);
		Provincia::create(['name' => 'El Nacional']);
		Provincia::create(['name' => 'Jujuy']);
		Provincia::create(['name' => 'Santa Fe']);
		Provincia::create(['name' => 'Santiago del Estero']);
		Provincia::create(['name' => 'Tucumán']);
	}

}