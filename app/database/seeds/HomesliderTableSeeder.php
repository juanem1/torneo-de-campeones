<?php

// Composer: "fzaninotto/faker": "v1.3.0"
use Faker\Factory as Faker;

class HomesliderTableSeeder extends Seeder {

	public function run()
	{
		$faker = Faker::create();

		foreach(range(1, 3) as $index)
		{
			Homeslider::create([
				'image' => 'slider'.$index.'.jpg',
				'title' => $faker->sentence(),
				'body' => $faker->sentence()
			]);
		}
	}

}