<?php

use Illuminate\Database\Migrations\Migration;
use Illuminate\Database\Schema\Blueprint;

class CreateTodothingsTable extends Migration {

	/**
	 * Run the migrations.
	 *
	 * @return void
	 */
	public function up()
	{
		Schema::create('todothings', function(Blueprint $table)
		{
			$table->integer('id', true);
			$table->string('description', 200)->unique('text_UNIQUE');
			$table->boolean('daything')->default(1);
			$table->enum('type', array('novas'))->nullable();
			$table->integer('display_order')->nullable();
		});
	}


	/**
	 * Reverse the migrations.
	 *
	 * @return void
	 */
	public function down()
	{
		Schema::drop('todothings');
	}

}
