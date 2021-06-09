<?php

use Illuminate\Database\Migrations\Migration;
use Illuminate\Database\Schema\Blueprint;

class CreateShiftteamsTable extends Migration {

	/**
	 * Run the migrations.
	 *
	 * @return void
	 */
	public function up()
	{
		Schema::create('shiftteams', function(Blueprint $table)
		{
			$table->integer('id', true);
			$table->integer('shiftsheet_id')->index('fk_shiftteams_shiftsheet');
			$table->integer('boss_id')->nullable()->index('fk_shiftteams_boss');
			$table->integer('teammate_id')->nullable()->index('fk_shiftteams_teammate');
			$table->integer('nova_id')->nullable()->index('fk_shiftteams_nova');
			$table->boolean('day');
		});
	}


	/**
	 * Reverse the migrations.
	 *
	 * @return void
	 */
	public function down()
	{
		Schema::drop('shiftteams');
	}

}
