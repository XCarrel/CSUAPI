<?php

use Illuminate\Database\Migrations\Migration;
use Illuminate\Database\Schema\Blueprint;

class CreateRestocksTable extends Migration {

	/**
	 * Run the migrations.
	 *
	 * @return void
	 */
	public function up()
	{
		Schema::create('restocks', function(Blueprint $table)
		{
			$table->integer('id', true);
			$table->dateTime('date');
			$table->integer('quantity');
			$table->integer('batch_id')->index('fk_restocks_batches1_idx');
			$table->integer('nova_id')->index('fk_restocks_novas1_idx');
			$table->integer('user_id')->index('fk_restocks_users1_idx');
			$table->integer('drugsheet_id')->index('fk_restocks_drugsheet');
			$table->unique(['date','batch_id','nova_id'], 'unique_restocks');
		});
	}


	/**
	 * Reverse the migrations.
	 *
	 * @return void
	 */
	public function down()
	{
		Schema::drop('restocks');
	}

}
