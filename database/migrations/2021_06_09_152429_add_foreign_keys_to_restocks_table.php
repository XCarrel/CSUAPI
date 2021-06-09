<?php

use Illuminate\Database\Migrations\Migration;
use Illuminate\Database\Schema\Blueprint;

class AddForeignKeysToRestocksTable extends Migration {

	/**
	 * Run the migrations.
	 *
	 * @return void
	 */
	public function up()
	{
		Schema::table('restocks', function(Blueprint $table)
		{
			$table->foreign('batch_id', 'fk_restocks_batches1')->references('id')->on('batches')->onUpdate('RESTRICT')->onDelete('RESTRICT');
			$table->foreign('drugsheet_id', 'fk_restocks_drugsheet')->references('id')->on('drugsheets')->onUpdate('RESTRICT')->onDelete('RESTRICT');
			$table->foreign('nova_id', 'fk_restocks_novas1')->references('id')->on('novas')->onUpdate('RESTRICT')->onDelete('RESTRICT');
			$table->foreign('user_id', 'fk_restocks_users1')->references('id')->on('users')->onUpdate('RESTRICT')->onDelete('RESTRICT');
		});
	}


	/**
	 * Reverse the migrations.
	 *
	 * @return void
	 */
	public function down()
	{
		Schema::table('restocks', function(Blueprint $table)
		{
			$table->dropForeign('fk_restocks_batches1');
			$table->dropForeign('fk_restocks_drugsheet');
			$table->dropForeign('fk_restocks_novas1');
			$table->dropForeign('fk_restocks_users1');
		});
	}

}
