<?php

use Illuminate\Database\Migrations\Migration;
use Illuminate\Database\Schema\Blueprint;

class CreateTodosheetsTable extends Migration {

	/**
	 * Run the migrations.
	 *
	 * @return void
	 */
	public function up()
	{
		Schema::create('todosheets', function(Blueprint $table)
		{
			$table->integer('id', true);
			$table->integer('week');
			$table->integer('status_id')->index('fk_todosheets_status1');
			$table->integer('base_id')->index('fk_todosheets_bases1_idx');
			$table->integer('closeBy')->nullable()->index('fk_todosheets_user1');
			$table->string('template_name', 45)->nullable()->unique('model_name_UNIQUE');
		});
	}


	/**
	 * Reverse the migrations.
	 *
	 * @return void
	 */
	public function down()
	{
		Schema::drop('todosheets');
	}

}
