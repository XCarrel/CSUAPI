<?php

use Illuminate\Database\Migrations\Migration;
use Illuminate\Database\Schema\Blueprint;

class CreateNovachecksTable extends Migration {

	/**
	 * Run the migrations.
	 *
	 * @return void
	 */
	public function up()
	{
		Schema::create('novachecks', function(Blueprint $table)
		{
			$table->integer('id', true);
			$table->dateTime('date');
			$table->integer('start');
			$table->integer('end')->nullable();
			$table->integer('drug_id')->index('fk_novachecks_drugs1_idx');
			$table->integer('nova_id')->index('fk_novachecks_novas1_idx');
			$table->integer('user_id')->index('fk_novachecks_users1_idx');
			$table->integer('drugsheet_id')->index('fk_novachecks_drugsheets1_idx');
			$table->unique(['date','drug_id','nova_id','drugsheet_id'], 'unique_novachecks');
		});
	}


	/**
	 * Reverse the migrations.
	 *
	 * @return void
	 */
	public function down()
	{
		Schema::drop('novachecks');
	}

}
