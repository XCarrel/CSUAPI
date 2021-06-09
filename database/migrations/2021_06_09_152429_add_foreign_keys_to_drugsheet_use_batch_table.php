<?php

use Illuminate\Database\Migrations\Migration;
use Illuminate\Database\Schema\Blueprint;

class AddForeignKeysToDrugsheetUseBatchTable extends Migration {

	/**
	 * Run the migrations.
	 *
	 * @return void
	 */
	public function up()
	{
		Schema::table('drugsheet_use_batch', function(Blueprint $table)
		{
			$table->foreign('batch_id', 'fk_drugsheet_use_batch_batches1')->references('id')->on('batches')->onUpdate('RESTRICT')->onDelete('RESTRICT');
			$table->foreign('drugsheet_id', 'fk_drugsheet_use_batch_drugsheets1')->references('id')->on('drugsheets')->onUpdate('RESTRICT')->onDelete('RESTRICT');
		});
	}


	/**
	 * Reverse the migrations.
	 *
	 * @return void
	 */
	public function down()
	{
		Schema::table('drugsheet_use_batch', function(Blueprint $table)
		{
			$table->dropForeign('fk_drugsheet_use_batch_batches1');
			$table->dropForeign('fk_drugsheet_use_batch_drugsheets1');
		});
	}

}
