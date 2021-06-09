<?php

use Illuminate\Database\Migrations\Migration;
use Illuminate\Database\Schema\Blueprint;

class AddForeignKeysToShiftmodelHasShiftactionTable extends Migration {

	/**
	 * Run the migrations.
	 *
	 * @return void
	 */
	public function up()
	{
		Schema::table('shiftmodel_has_shiftaction', function(Blueprint $table)
		{
			$table->foreign('shiftaction_id', 'fk_shiftactions_has_shiftmodels_shiftactions1')->references('id')->on('shiftactions')->onUpdate('RESTRICT')->onDelete('RESTRICT');
			$table->foreign('shiftmodel_id', 'fk_shiftactions_has_shiftmodels_shiftmodels1')->references('id')->on('shiftmodels')->onUpdate('RESTRICT')->onDelete('RESTRICT');
		});
	}


	/**
	 * Reverse the migrations.
	 *
	 * @return void
	 */
	public function down()
	{
		Schema::table('shiftmodel_has_shiftaction', function(Blueprint $table)
		{
			$table->dropForeign('fk_shiftactions_has_shiftmodels_shiftactions1');
			$table->dropForeign('fk_shiftactions_has_shiftmodels_shiftmodels1');
		});
	}

}
