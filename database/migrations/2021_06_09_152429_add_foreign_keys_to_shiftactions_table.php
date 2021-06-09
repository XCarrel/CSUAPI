<?php

use Illuminate\Database\Migrations\Migration;
use Illuminate\Database\Schema\Blueprint;

class AddForeignKeysToShiftactionsTable extends Migration {

	/**
	 * Run the migrations.
	 *
	 * @return void
	 */
	public function up()
	{
		Schema::table('shiftactions', function(Blueprint $table)
		{
			$table->foreign('shiftsection_id', 'fk_shift_lines_shift_sections1')->references('id')->on('shiftsections')->onUpdate('RESTRICT')->onDelete('RESTRICT');
		});
	}


	/**
	 * Reverse the migrations.
	 *
	 * @return void
	 */
	public function down()
	{
		Schema::table('shiftactions', function(Blueprint $table)
		{
			$table->dropForeign('fk_shift_lines_shift_sections1');
		});
	}

}
