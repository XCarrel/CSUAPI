<?php

use Illuminate\Database\Migrations\Migration;
use Illuminate\Database\Schema\Blueprint;

class CreateBatchesTable extends Migration {

	/**
	 * Run the migrations.
	 *
	 * @return void
	 */
	public function up()
	{
		Schema::create('batches', function(Blueprint $table)
		{
			$table->integer('id', true);
			$table->string('number', 45);
			$table->string('state', 45)->default('new');
			$table->integer('drug_id')->index('fk_batches_drugs_idx');
			$table->integer('base_id')->index('fk_batches_bases1_idx');
			$table->unique(['number','drug_id'], 'number_UNIQUE');
		});
	}


	/**
	 * Reverse the migrations.
	 *
	 * @return void
	 */
	public function down()
	{
		Schema::drop('batches');
	}

}
