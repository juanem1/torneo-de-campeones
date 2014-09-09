<?php

// Composer: "fzaninotto/faker": "v1.3.0"
use Faker\Factory as Faker;

class NewsTableSeeder extends Seeder {

	public function run()
	{
		$faker = Faker::create();

		foreach(range(1, 10) as $index)
		{
			News::create([
				'provincia_id' => $faker->numberBetween(1, 8),
				'title' => $faker->sentence(),
				'body' => $faker->text(2000)
			]);
		}
	}

}