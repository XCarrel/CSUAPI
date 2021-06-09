<?php

use Illuminate\Database\Migrations\Migration;
use Illuminate\Database\Schema\Blueprint;

class AddForeignKeysToNovaunavailabilitesTable extends Migration {

	/**
	 * Run the migrations.
	 *
	 * @return void
	 */
	public function up()
	{
		Schema::table('novaunavailabilites', function(Blueprint $table)
		{
			$table->foreign('nova_id', 'fk_novaunavailabilites_nova_id')->references('id')->on('novas')->onUpdate('RESTRICT')->onDelete('RESTRICT');
			$table->foreign('user_id', 'fk_novaunavailabilites_user')->references('id')->on('users')->onUpdate('RESTRICT')->onDelete('RESTRICT');
		});
	}


	/**
	 * Reverse the migrations.
	 *
	 * @return void
	 */
	public function down()
	{
		Schema::table('novaunavailabilites', function(Blueprint $table)
		{
			$table->dropForeign('fk_novaunavailabilites_nova_id');
			$table->dropForeign('fk_novaunavailabilites_user');
		});
	}

}
