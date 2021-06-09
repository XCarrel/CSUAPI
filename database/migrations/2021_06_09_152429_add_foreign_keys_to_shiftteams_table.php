<?php

use Illuminate\Database\Migrations\Migration;
use Illuminate\Database\Schema\Blueprint;

class AddForeignKeysToShiftteamsTable extends Migration {

	/**
	 * Run the migrations.
	 *
	 * @return void
	 */
	public function up()
	{
		Schema::table('shiftteams', function(Blueprint $table)
		{
			$table->foreign('boss_id', 'fk_shiftteams_boss')->references('id')->on('users')->onUpdate('RESTRICT')->onDelete('RESTRICT');
			$table->foreign('nova_id', 'fk_shiftteams_nova')->references('id')->on('novas')->onUpdate('RESTRICT')->onDelete('RESTRICT');
			$table->foreign('shiftsheet_id', 'fk_shiftteams_shiftsheet')->references('id')->on('shiftsheets')->onUpdate('RESTRICT')->onDelete('CASCADE');
			$table->foreign('teammate_id', 'fk_shiftteams_teammate')->references('id')->on('users')->onUpdate('RESTRICT')->onDelete('RESTRICT');
		});
	}


	/**
	 * Reverse the migrations.
	 *
	 * @return void
	 */
	public function down()
	{
		Schema::table('shiftteams', function(Blueprint $table)
		{
			$table->dropForeign('fk_shiftteams_boss');
			$table->dropForeign('fk_shiftteams_nova');
			$table->dropForeign('fk_shiftteams_shiftsheet');
			$table->dropForeign('fk_shiftteams_teammate');
		});
	}

}
