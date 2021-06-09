<?php

use Illuminate\Database\Migrations\Migration;
use Illuminate\Database\Schema\Blueprint;

class CreateDrugsignaturesTable extends Migration {

	/**
	 * Run the migrations.
	 *
	 * @return void
	 */
	public function up()
	{
		Schema::create('drugsignatures', function(Blueprint $table)
		{
			$table->integer('id', true);
			$table->dateTime('date')->default(DB::raw('CURRENT_TIMESTAMP'));
			$table->dateTime('day');
			$table->integer('drugsheet_id')->index('fk_drugsignatures_drugsheets1_idx');
			$table->integer('user_id')->index('fk_drugsignatures_users1_idx');
			$table->integer('base')->index('fk_drugsignatures_bases1');
			$table->unique(['day','drugsheet_id'], 'day_drugsheet_id');
		});
	}


	/**
	 * Reverse the migrations.
	 *
	 * @return void
	 */
	public function down()
	{
		Schema::drop('drugsignatures');
	}

}
