<?php

use Illuminate\Database\Migrations\Migration;
use Illuminate\Database\Schema\Blueprint;

class CreateWorktimesTable extends Migration {

	/**
	 * Run the migrations.
	 *
	 * @return void
	 */
	public function up()
	{
		Schema::create('worktimes', function(Blueprint $table)
		{
			$table->integer('id', true);
			$table->integer('code')->unique('code_UNIQUE');
			$table->string('type', 50)->nullable();
			$table->boolean('day')->nullable();
			$table->integer('base_id')->nullable()->index('fk_base_id');
		});
	}


	/**
	 * Reverse the migrations.
	 *
	 * @return void
	 */
	public function down()
	{
		Schema::drop('worktimes');
	}

}
