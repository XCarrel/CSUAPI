<?php

use Illuminate\Database\Migrations\Migration;
use Illuminate\Database\Schema\Blueprint;

class AddForeignKeysToShiftchecksTable extends Migration {

	/**
	 * Run the migrations.
	 *
	 * @return void
	 */
	public function up()
	{
		Schema::table('shiftchecks', function(Blueprint $table)
		{
			$table->foreign('shiftaction_id', 'fk_shiftChecks_shiftActions1')->references('id')->on('shiftactions')->onUpdate('RESTRICT')->onDelete('RESTRICT');
			$table->foreign('shiftsheet_id', 'fk_shiftChecks_shiftSheets1')->references('id')->on('shiftsheets')->onUpdate('RESTRICT')->onDelete('RESTRICT');
			$table->foreign('user_id', 'fk_shiftChecks_users1')->references('id')->on('users')->onUpdate('RESTRICT')->onDelete('RESTRICT');
		});
	}


	/**
	 * Reverse the migrations.
	 *
	 * @return void
	 */
	public function down()
	{
		Schema::table('shiftchecks', function(Blueprint $table)
		{
			$table->dropForeign('fk_shiftChecks_shiftActions1');
			$table->dropForeign('fk_shiftChecks_shiftSheets1');
			$table->dropForeign('fk_shiftChecks_users1');
		});
	}

}
