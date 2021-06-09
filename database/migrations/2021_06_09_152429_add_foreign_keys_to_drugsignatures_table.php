<?php

use Illuminate\Database\Migrations\Migration;
use Illuminate\Database\Schema\Blueprint;

class AddForeignKeysToDrugsignaturesTable extends Migration {

	/**
	 * Run the migrations.
	 *
	 * @return void
	 */
	public function up()
	{
		Schema::table('drugsignatures', function(Blueprint $table)
		{
			$table->foreign('base', 'fk_drugsignatures_bases1')->references('id')->on('bases')->onUpdate('RESTRICT')->onDelete('RESTRICT');
			$table->foreign('drugsheet_id', 'fk_drugsignatures_drugsheets1')->references('id')->on('drugsheets')->onUpdate('RESTRICT')->onDelete('RESTRICT');
			$table->foreign('user_id', 'fk_drugsignatures_users1')->references('id')->on('users')->onUpdate('RESTRICT')->onDelete('RESTRICT');
		});
	}


	/**
	 * Reverse the migrations.
	 *
	 * @return void
	 */
	public function down()
	{
		Schema::table('drugsignatures', function(Blueprint $table)
		{
			$table->dropForeign('fk_drugsignatures_bases1');
			$table->dropForeign('fk_drugsignatures_drugsheets1');
			$table->dropForeign('fk_drugsignatures_users1');
		});
	}

}
