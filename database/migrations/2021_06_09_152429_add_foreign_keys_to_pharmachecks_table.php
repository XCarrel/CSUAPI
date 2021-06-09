<?php

use Illuminate\Database\Migrations\Migration;
use Illuminate\Database\Schema\Blueprint;

class AddForeignKeysToPharmachecksTable extends Migration {

	/**
	 * Run the migrations.
	 *
	 * @return void
	 */
	public function up()
	{
		Schema::table('pharmachecks', function(Blueprint $table)
		{
			$table->foreign('batch_id', 'fk_pharmachecks_batches1')->references('id')->on('batches')->onUpdate('RESTRICT')->onDelete('RESTRICT');
			$table->foreign('drugsheet_id', 'fk_pharmachecks_drugsheets1')->references('id')->on('drugsheets')->onUpdate('RESTRICT')->onDelete('RESTRICT');
			$table->foreign('user_id', 'fk_pharmachecks_users1')->references('id')->on('users')->onUpdate('RESTRICT')->onDelete('RESTRICT');
		});
	}


	/**
	 * Reverse the migrations.
	 *
	 * @return void
	 */
	public function down()
	{
		Schema::table('pharmachecks', function(Blueprint $table)
		{
			$table->dropForeign('fk_pharmachecks_batches1');
			$table->dropForeign('fk_pharmachecks_drugsheets1');
			$table->dropForeign('fk_pharmachecks_users1');
		});
	}

}
