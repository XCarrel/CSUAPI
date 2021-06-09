<?php

use Illuminate\Database\Migrations\Migration;
use Illuminate\Database\Schema\Blueprint;

class CreateLogsTable extends Migration {

	/**
	 * Run the migrations.
	 *
	 * @return void
	 */
	public function up()
	{
		Schema::create('logs', function(Blueprint $table)
		{
			$table->integer('id', true);
			$table->dateTime('timestamp')->default(DB::raw('CURRENT_TIMESTAMP'));
			$table->integer('user_id')->index('fkmadeby_idx');
			$table->enum('report_type', array('SHIFT','TODO','DRUG'));
			$table->integer('report_id')->comment('A foreign key without constraint, because it will point to different tables according to the report type');
			$table->string('info', 200)->nullable()->comment('decribe what is done');
		});
	}


	/**
	 * Reverse the migrations.
	 *
	 * @return void
	 */
	public function down()
	{
		Schema::drop('logs');
	}

}
