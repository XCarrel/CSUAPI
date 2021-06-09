<?php

use Illuminate\Database\Migrations\Migration;
use Illuminate\Database\Schema\Blueprint;

class CreateShiftmodelsTable extends Migration {

	/**
	 * Run the migrations.
	 *
	 * @return void
	 */
	public function up()
	{
		Schema::create('shiftmodels', function(Blueprint $table)
		{
			$table->integer('id', true);
			$table->string('name', 45)->nullable()->unique('name_UNIQUE');
			$table->integer('nbTeamD')->default(1);
			$table->integer('nbTeamN')->default(1);
			$table->boolean('suggested')->default(0);
		});
	}


	/**
	 * Reverse the migrations.
	 *
	 * @return void
	 */
	public function down()
	{
		Schema::drop('shiftmodels');
	}

}
