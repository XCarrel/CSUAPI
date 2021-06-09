<?php

use Illuminate\Database\Migrations\Migration;
use Illuminate\Database\Schema\Blueprint;

class CreateShiftchecksTable extends Migration {

	/**
	 * Run the migrations.
	 *
	 * @return void
	 */
	public function up()
	{
		Schema::create('shiftchecks', function(Blueprint $table)
		{
			$table->integer('id', true);
			$table->boolean('day');
			$table->dateTime('time')->default(DB::raw('CURRENT_TIMESTAMP'));
			$table->integer('shiftsheet_id')->index('fk_shiftChecks_shiftSheets1_idx');
			$table->integer('user_id')->index('fk_shiftChecks_users1_idx');
			$table->integer('shiftaction_id')->index('fk_shiftChecks_shiftActions1_idx');
		});
	}


	/**
	 * Reverse the migrations.
	 *
	 * @return void
	 */
	public function down()
	{
		Schema::drop('shiftchecks');
	}

}
