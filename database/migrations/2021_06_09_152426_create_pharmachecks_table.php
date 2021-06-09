<?php

use Illuminate\Database\Migrations\Migration;
use Illuminate\Database\Schema\Blueprint;

class CreatePharmachecksTable extends Migration {

	/**
	 * Run the migrations.
	 *
	 * @return void
	 */
	public function up()
	{
		Schema::create('pharmachecks', function(Blueprint $table)
		{
			$table->integer('id', true);
			$table->dateTime('date');
			$table->integer('start');
			$table->integer('end')->nullable();
			$table->integer('batch_id')->index('fk_pharmachecks_batches1_idx');
			$table->integer('user_id')->index('fk_pharmachecks_users1_idx');
			$table->integer('drugsheet_id')->index('fk_pharmachecks_drugsheets1_idx');
			$table->unique(['date','batch_id','drugsheet_id'], 'unique_pharmachecks');
		});
	}


	/**
	 * Reverse the migrations.
	 *
	 * @return void
	 */
	public function down()
	{
		Schema::drop('pharmachecks');
	}

}
