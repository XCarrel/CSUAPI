<?php

use Illuminate\Database\Migrations\Migration;
use Illuminate\Database\Schema\Blueprint;

class CreateDrugsheetUseNovaTable extends Migration {

	/**
	 * Run the migrations.
	 *
	 * @return void
	 */
	public function up()
	{
		Schema::create('drugsheet_use_nova', function(Blueprint $table)
		{
			$table->integer('id', true);
			$table->integer('drugsheet_id')->index('fk_drugsheet_use_nova_drugsheets1_idx');
			$table->integer('nova_id')->index('fk_drugsheet_use_nova_novas1_idx');
			$table->unique(['drugsheet_id','nova_id'], 'unique_use');
		});
	}


	/**
	 * Reverse the migrations.
	 *
	 * @return void
	 */
	public function down()
	{
		Schema::drop('drugsheet_use_nova');
	}

}
