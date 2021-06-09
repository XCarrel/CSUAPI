<?php

use Illuminate\Database\Migrations\Migration;
use Illuminate\Database\Schema\Blueprint;

class AddForeignKeysToNovachecksTable extends Migration {

	/**
	 * Run the migrations.
	 *
	 * @return void
	 */
	public function up()
	{
		Schema::table('novachecks', function(Blueprint $table)
		{
			$table->foreign('drug_id', 'fk_novachecks_drugs1')->references('id')->on('drugs')->onUpdate('RESTRICT')->onDelete('RESTRICT');
			$table->foreign('drugsheet_id', 'fk_novachecks_drugsheets1')->references('id')->on('drugsheets')->onUpdate('RESTRICT')->onDelete('RESTRICT');
			$table->foreign('nova_id', 'fk_novachecks_novas1')->references('id')->on('novas')->onUpdate('RESTRICT')->onDelete('RESTRICT');
			$table->foreign('user_id', 'fk_novachecks_users1')->references('id')->on('users')->onUpdate('RESTRICT')->onDelete('RESTRICT');
		});
	}


	/**
	 * Reverse the migrations.
	 *
	 * @return void
	 */
	public function down()
	{
		Schema::table('novachecks', function(Blueprint $table)
		{
			$table->dropForeign('fk_novachecks_drugs1');
			$table->dropForeign('fk_novachecks_drugsheets1');
			$table->dropForeign('fk_novachecks_novas1');
			$table->dropForeign('fk_novachecks_users1');
		});
	}

}
