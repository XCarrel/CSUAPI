<?php

use Illuminate\Database\Migrations\Migration;
use Illuminate\Database\Schema\Blueprint;

class AddForeignKeysToTodosTable extends Migration {

	/**
	 * Run the migrations.
	 *
	 * @return void
	 */
	public function up()
	{
		Schema::table('todos', function(Blueprint $table)
		{
			$table->foreign('todosheet_id', 'fk_todoitems_todosheets1')->references('id')->on('todosheets')->onUpdate('RESTRICT')->onDelete('CASCADE');
			$table->foreign('todothing_id', 'fk_todoitems_todotexts1')->references('id')->on('todothings')->onUpdate('RESTRICT')->onDelete('RESTRICT');
			$table->foreign('user_id', 'fk_todoitems_users1')->references('id')->on('users')->onUpdate('RESTRICT')->onDelete('RESTRICT');
		});
	}


	/**
	 * Reverse the migrations.
	 *
	 * @return void
	 */
	public function down()
	{
		Schema::table('todos', function(Blueprint $table)
		{
			$table->dropForeign('fk_todoitems_todosheets1');
			$table->dropForeign('fk_todoitems_todotexts1');
			$table->dropForeign('fk_todoitems_users1');
		});
	}

}
