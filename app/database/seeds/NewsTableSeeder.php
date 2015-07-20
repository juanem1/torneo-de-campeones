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
			$date  = $faker->dateTimeBetween('-1 years');

			$n = new News;
			$n->provincia_id = $faker->numberBetween(1, 9);
			$n->title = $title;
			$n->slug = Str::slug($title);
			$n->body = $faker->text(2000);
			$n->created_at = $date;
			$n->updated_at = $date;
			$n->save();
		}
	}

}