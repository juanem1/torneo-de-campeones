<?php

// Composer: "fzaninotto/faker": "v1.3.0"
use Faker\Factory as Faker;

class NewsTableSeeder extends Seeder {

	public function run()
	{
		$faker = Faker::create();

		foreach(range(1, 40) as $index)
		{
			$title = $faker->sentence();
			News::create([
				'provincia_id' => $faker->numberBetween(1, 9),
				'title' => $title,
				'slug' => Str::slug($title),
				'body' => $faker->text(2000)
			]);
		}
	}

}