<?php

use Illuminate\Database\Migrations\Migration;
use Illuminate\Database\Schema\Blueprint;

class CreateSpecialdrugoutTable extends Migration {

	/**
	 * Run the migrations.
	 *
	 * @return void
	 */
	public function up()
	{
		Schema::create('specialdrugout', function(Blueprint $table)
		{
			$table->integer('ID', true);
			$table->date('date');
			$table->dateTime('execution_date')->default(DB::raw('CURRENT_TIMESTAMP'));
			$table->integer('batch_id')->index('FK_batch_id-batches');
			$table->integer('drugsheet_id')->index('FK_drugsheet_id-drugsheet');
			$table->integer('quantity');
			$table->string('comment', 500);
			$table->integer('notified_admin_id')->index('FK_notified_admin_id-users');
			$table->integer('user_id')->index('UK_user_id-users');
		});
	}


	/**
	 * Reverse the migrations.
	 *
	 * @return void
	 */
	public function down()
	{
		Schema::drop('specialdrugout');
	}

}
