<?php

use Illuminate\Database\Migrations\Migration;
use Illuminate\Database\Schema\Blueprint;

class AddForeignKeysToWorktimesTable extends Migration {

	/**
	 * Run the migrations.
	 *
	 * @return void
	 */
	public function up()
	{
		Schema::table('worktimes', function(Blueprint $table)
		{
			$table->foreign('base_id', 'fk_base_id')->references('id')->on('bases')->onUpdate('RESTRICT')->onDelete('RESTRICT');
		});
	}


	/**
	 * Reverse the migrations.
	 *
	 * @return void
	 */
	public function down()
	{
		Schema::table('worktimes', function(Blueprint $table)
		{
			$table->dropForeign('fk_base_id');
		});
	}

}
