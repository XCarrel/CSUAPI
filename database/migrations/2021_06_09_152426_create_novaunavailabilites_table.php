<?php

use Illuminate\Database\Migrations\Migration;
use Illuminate\Database\Schema\Blueprint;

class CreateNovaunavailabilitesTable extends Migration {

	/**
	 * Run the migrations.
	 *
	 * @return void
	 */
	public function up()
	{
		Schema::create('novaunavailabilites', function(Blueprint $table)
		{
			$table->integer('id', true);
			$table->string('comment', 45)->nullable();
			$table->date('date');
			$table->boolean('day');
			$table->integer('user_id')->index('fk_novaunavailabilites_user_id');
			$table->integer('nova_id')->index('fk_novaunavailabilites_nova_id');
			$table->unique(['date','day','nova_id'], 'unique_novaunavailabilites');
		});
	}


	/**
	 * Reverse the migrations.
	 *
	 * @return void
	 */
	public function down()
	{
		Schema::drop('novaunavailabilites');
	}

}
