<?php

use Illuminate\Database\Migrations\Migration;
use Illuminate\Database\Schema\Blueprint;

class CreateUsersTable extends Migration {

	/**
	 * Run the migrations.
	 *
	 * @return void
	 */
	public function up()
	{
		Schema::create('users', function(Blueprint $table)
		{
			$table->integer('id', true);
			$table->string('firstname', 45);
			$table->string('lastname', 45);
			$table->string('initials', 45)->unique('initials_UNIQUE');
			$table->string('password', 100)->nullable();
			$table->boolean('admin');
			$table->boolean('firstconnect');
			$table->string('email', 254)->nullable()->unique('email_UNIQUE');
			$table->string('mobileNumber', 20)->nullable();
			$table->integer('number')->nullable();
			$table->string('api_token', 200)->nullable();
		});
	}


	/**
	 * Reverse the migrations.
	 *
	 * @return void
	 */
	public function down()
	{
		Schema::drop('users');
	}

}
