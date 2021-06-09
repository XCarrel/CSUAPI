<?php

use Illuminate\Database\Migrations\Migration;
use Illuminate\Database\Schema\Blueprint;

class AddForeignKeysToShiftsheetsTable extends Migration {

	/**
	 * Run the migrations.
	 *
	 * @return void
	 */
	public function up()
	{
		Schema::table('shiftsheets', function(Blueprint $table)
		{
			$table->foreign('status_id', 'fk_shiftSheets_status1')->references('id')->on('status')->onUpdate('RESTRICT')->onDelete('RESTRICT');
			$table->foreign('closeBy', 'fk_shiftSheets_users5')->references('id')->on('users')->onUpdate('RESTRICT')->onDelete('RESTRICT');
			$table->foreign('base_id', 'fk_shiftsheets_bases1')->references('id')->on('bases')->onUpdate('RESTRICT')->onDelete('RESTRICT');
			$table->foreign('shiftmodel_id', 'fk_shiftsheets_shiftmodels1')->references('id')->on('shiftmodels')->onUpdate('RESTRICT')->onDelete('RESTRICT');
		});
	}


	/**
	 * Reverse the migrations.
	 *
	 * @return void
	 */
	public function down()
	{
		Schema::table('shiftsheets', function(Blueprint $table)
		{
			$table->dropForeign('fk_shiftSheets_status1');
			$table->dropForeign('fk_shiftSheets_users5');
			$table->dropForeign('fk_shiftsheets_bases1');
			$table->dropForeign('fk_shiftsheets_shiftmodels1');
		});
	}

}
