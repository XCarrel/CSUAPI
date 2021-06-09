<?php

use Illuminate\Database\Migrations\Migration;
use Illuminate\Database\Schema\Blueprint;

class CreateShiftmodelHasShiftactionTable extends Migration {

	/**
	 * Run the migrations.
	 *
	 * @return void
	 */
	public function up()
	{
		Schema::create('shiftmodel_has_shiftaction', function(Blueprint $table)
		{
			$table->integer('id', true);
			$table->integer('shiftaction_id')->index('fk_shiftactions_has_shiftmodels_shiftactions1_idx');
			$table->integer('shiftmodel_id')->index('fk_shiftactions_has_shiftmodels_shiftmodels1_idx');
			$table->unique(['shiftaction_id','shiftmodel_id'], 'uniqueactionpermodel');
		});
	}


	/**
	 * Reverse the migrations.
	 *
	 * @return void
	 */
	public function down()
	{
		Schema::drop('shiftmodel_has_shiftaction');
	}

}
