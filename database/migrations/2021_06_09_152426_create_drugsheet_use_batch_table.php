<?php

use Illuminate\Database\Migrations\Migration;
use Illuminate\Database\Schema\Blueprint;

class CreateDrugsheetUseBatchTable extends Migration {

	/**
	 * Run the migrations.
	 *
	 * @return void
	 */
	public function up()
	{
		Schema::create('drugsheet_use_batch', function(Blueprint $table)
		{
			$table->integer('id', true);
			$table->integer('drugsheet_id')->index('fk_drugsheet_use_batch_drugsheets1_idx');
			$table->integer('batch_id')->index('fk_drugsheet_use_batch_batches1_idx');
			$table->unique(['drugsheet_id','batch_id'], 'unique_use');
		});
	}


	/**
	 * Reverse the migrations.
	 *
	 * @return void
	 */
	public function down()
	{
		Schema::drop('drugsheet_use_batch');
	}

}
