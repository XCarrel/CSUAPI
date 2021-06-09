<?php

use Illuminate\Database\Migrations\Migration;
use Illuminate\Database\Schema\Blueprint;

class CreateDrugsheetsTable extends Migration {

	/**
	 * Run the migrations.
	 *
	 * @return void
	 */
	public function up()
	{
		Schema::create('drugsheets', function(Blueprint $table)
		{
			$table->integer('id', true);
			$table->integer('week');
			$table->integer('status_id')->index('fk_drugsheets_status1');
			$table->integer('base_id')->index('fk_drugsheets_bases1_idx');
			$table->unique(['week','base_id'], 'drugSHEETUNIQ');
		});
	}


	/**
	 * Reverse the migrations.
	 *
	 * @return void
	 */
	public function down()
	{
		Schema::drop('drugsheets');
	}

}
