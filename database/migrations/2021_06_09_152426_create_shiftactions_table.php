<?php

use Illuminate\Database\Migrations\Migration;
use Illuminate\Database\Schema\Blueprint;

class CreateShiftactionsTable extends Migration {

	/**
	 * Run the migrations.
	 *
	 * @return void
	 */
	public function up()
	{
		Schema::create('shiftactions', function(Blueprint $table)
		{
			$table->integer('id', true);
			$table->string('text', 45);
			$table->integer('shiftsection_id')->index('fk_shift_lines_shift_sections1_idx');
		});
	}


	/**
	 * Reverse the migrations.
	 *
	 * @return void
	 */
	public function down()
	{
		Schema::drop('shiftactions');
	}

}
