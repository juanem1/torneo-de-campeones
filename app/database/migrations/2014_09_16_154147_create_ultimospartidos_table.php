<?php

use Illuminate\Database\Migrations\Migration;
use Illuminate\Database\Schema\Blueprint;

class CreateUltimospartidosTable extends Migration {

	/**
	 * Run the migrations.
	 *
	 * @return void
	 */
	public function up()
	{
		Schema::create('ultimospartidos', function(Blueprint $table)
		{
			$table->increments('id');
			$table->integer('provincia_id');
			$table->string('team_a');
			$table->string('team_b');
			$table->string('results');
			$table->string('description');
			$table->timestamps();
		});
	}


	/**
	 * Reverse the migrations.
	 *
	 * @return void
	 */
	public function down()
	{
		Schema::drop('ultimospartidos');
	}

}
