<?php

use Illuminate\Database\Migrations\Migration;
use Illuminate\Database\Schema\Blueprint;

class CreateShiftsheetsTable extends Migration {

	/**
	 * Run the migrations.
	 *
	 * @return void
	 */
	public function up()
	{
		Schema::create('shiftsheets', function(Blueprint $table)
		{
			$table->integer('id', true);
			$table->date('date');
			$table->integer('shiftmodel_id')->index('fk_shiftsheets_shiftmodels1_idx');
			$table->integer('base_id')->index('fk_shiftsheets_bases1_idx');
			$table->integer('status_id')->index('fk_shiftSheets_status1_idx');
			$table->integer('closeBy')->nullable()->index('fk_shiftSheets_users5_idx');
			$table->unique(['base_id','date'], 'uniq');
		});
	}


	/**
	 * Reverse the migrations.
	 *
	 * @return void
	 */
	public function down()
	{
		Schema::drop('shiftsheets');
	}

}
