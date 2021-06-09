<?php

use Illuminate\Database\Migrations\Migration;
use Illuminate\Database\Schema\Blueprint;

class AddForeignKeysToDrugsheetUseNovaTable extends Migration {

	/**
	 * Run the migrations.
	 *
	 * @return void
	 */
	public function up()
	{
		Schema::table('drugsheet_use_nova', function(Blueprint $table)
		{
			$table->foreign('drugsheet_id', 'fk_drugsheet_use_nova_drugsheets1')->references('id')->on('drugsheets')->onUpdate('RESTRICT')->onDelete('RESTRICT');
			$table->foreign('nova_id', 'fk_drugsheet_use_nova_novas1')->references('id')->on('novas')->onUpdate('RESTRICT')->onDelete('RESTRICT');
		});
	}


	/**
	 * Reverse the migrations.
	 *
	 * @return void
	 */
	public function down()
	{
		Schema::table('drugsheet_use_nova', function(Blueprint $table)
		{
			$table->dropForeign('fk_drugsheet_use_nova_drugsheets1');
			$table->dropForeign('fk_drugsheet_use_nova_novas1');
		});
	}

}
