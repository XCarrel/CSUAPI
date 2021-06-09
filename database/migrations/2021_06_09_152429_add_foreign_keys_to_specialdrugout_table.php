<?php

use Illuminate\Database\Migrations\Migration;
use Illuminate\Database\Schema\Blueprint;

class AddForeignKeysToSpecialdrugoutTable extends Migration {

	/**
	 * Run the migrations.
	 *
	 * @return void
	 */
	public function up()
	{
		Schema::table('specialdrugout', function(Blueprint $table)
		{
			$table->foreign('batch_id', 'FK_batch_id-batches')->references('id')->on('batches')->onUpdate('RESTRICT')->onDelete('RESTRICT');
			$table->foreign('drugsheet_id', 'FK_drugsheet_id-drugsheet')->references('id')->on('drugsheets')->onUpdate('RESTRICT')->onDelete('RESTRICT');
			$table->foreign('notified_admin_id', 'FK_notified_admin_id-users')->references('id')->on('users')->onUpdate('RESTRICT')->onDelete('RESTRICT');
			$table->foreign('user_id', 'UK_user_id-users')->references('id')->on('users')->onUpdate('RESTRICT')->onDelete('RESTRICT');
		});
	}


	/**
	 * Reverse the migrations.
	 *
	 * @return void
	 */
	public function down()
	{
		Schema::table('specialdrugout', function(Blueprint $table)
		{
			$table->dropForeign('FK_batch_id-batches');
			$table->dropForeign('FK_drugsheet_id-drugsheet');
			$table->dropForeign('FK_notified_admin_id-users');
			$table->dropForeign('UK_user_id-users');
		});
	}

}
