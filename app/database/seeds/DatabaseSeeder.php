<?php

class DatabaseSeeder extends Seeder {

	/**
	 * Run the database seeds.
	 *
	 * @return void
	 */
	public function run()
	{
		Eloquent::unguard();

		$this->call('ProvinciaTableSeeder');
		$this->call('NewsTableSeeder');
		$this->call('HomesliderTableSeeder');
	}

}
