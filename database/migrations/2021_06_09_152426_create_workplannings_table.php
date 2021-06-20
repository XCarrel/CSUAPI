<?php

use Illuminate\Database\Migrations\Migration;
use Illuminate\Database\Schema\Blueprint;

class CreateWorkplanningsTable extends Migration {

	/**
	 * Run the migrations.
	 *
	 * @return void
	 */
	public function up()
	{
		Schema::create('workplannings', function(Blueprint $table)
		{
			$table->integer('id', true);
			$table->integer('worktime_id')->nullable()->index('fk_worktime_id');
			$table->integer('user_id')->nullable()->index('fk_user_id');
			$table->date('date');
            $table->unique(['date','user_id'], 'unique_workplan');
		});
	}


	/**
	 * Reverse the migrations.
	 *
	 * @return void
	 */
	public function down()
	{
		Schema::drop('workplannings');
	}

}
