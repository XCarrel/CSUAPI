<?php

use Illuminate\Database\Migrations\Migration;
use Illuminate\Database\Schema\Blueprint;

class CreateTodosTable extends Migration {

	/**
	 * Run the migrations.
	 *
	 * @return void
	 */
	public function up()
	{
		Schema::create('todos', function(Blueprint $table)
		{
			$table->integer('id', true);
			$table->integer('todothing_id')->index('fk_todoitems_todotexts1_idx');
			$table->integer('todosheet_id')->index('fk_todoitems_todosheets1_idx');
			$table->integer('user_id')->nullable()->index('fk_todoitems_users1_idx');
			$table->string('value', 45)->nullable();
			$table->dateTime('done_at')->nullable();
			$table->integer('day_of_week')->nullable();
		});
	}


	/**
	 * Reverse the migrations.
	 *
	 * @return void
	 */
	public function down()
	{
		Schema::drop('todos');
	}

}
