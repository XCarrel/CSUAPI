<?php

use Illuminate\Database\Migrations\Migration;
use Illuminate\Database\Schema\Blueprint;

class AddForeignKeysToDrugsheetsTable extends Migration {

	/**
	 * Run the migrations.
	 *
	 * @return void
	 */
	public function up()
	{
		Schema::table('drugsheets', function(Blueprint $table)
		{
			$table->foreign('base_id', 'fk_drugsheets_bases1')->references('id')->on('bases')->onUpdate('RESTRICT')->onDelete('RESTRICT');
			$table->foreign('status_id', 'fk_drugsheets_status1')->references('id')->on('status')->onUpdate('RESTRICT')->onDelete('RESTRICT');
		});
	}


	/**
	 * Reverse the migrations.
	 *
	 * @return void
	 */
	public function down()
	{
		Schema::table('drugsheets', function(Blueprint $table)
		{
			$table->dropForeign('fk_drugsheets_bases1');
			$table->dropForeign('fk_drugsheets_status1');
		});
	}

}
