<?php

use Illuminate\Database\Migrations\Migration;
use Illuminate\Database\Schema\Blueprint;

class CreateApitokensTable extends Migration {

	/**
	 * Run the migrations.
	 *
	 * @return void
	 */
	public function up()
	{
		Schema::create('apitokens', function(Blueprint $table)
		{
			$table->integer('ID', true);
			$table->dateTime('date')->default(DB::raw('CURRENT_TIMESTAMP'));
			$table->integer('user_id')->unique('user_id');
			$table->string('token', 60);
		});
	}


	/**
	 * Reverse the migrations.
	 *
	 * @return void
	 */
	public function down()
	{
		Schema::drop('apitokens');
	}

}
