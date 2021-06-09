<?php

use Illuminate\Database\Migrations\Migration;
use Illuminate\Database\Schema\Blueprint;

class AddForeignKeysToWorkplanningsTable extends Migration {

	/**
	 * Run the migrations.
	 *
	 * @return void
	 */
	public function up()
	{
		Schema::table('workplannings', function(Blueprint $table)
		{
			$table->foreign('user_id', 'fk_user_id')->references('id')->on('users')->onUpdate('RESTRICT')->onDelete('RESTRICT');
			$table->foreign('worktime_id', 'fk_worktime_id')->references('id')->on('worktimes')->onUpdate('RESTRICT')->onDelete('RESTRICT');
		});
	}


	/**
	 * Reverse the migrations.
	 *
	 * @return void
	 */
	public function down()
	{
		Schema::table('workplannings', function(Blueprint $table)
		{
			$table->dropForeign('fk_user_id');
			$table->dropForeign('fk_worktime_id');
		});
	}

}
