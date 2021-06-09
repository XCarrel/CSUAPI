<?php

use Illuminate\Database\Migrations\Migration;
use Illuminate\Database\Schema\Blueprint;

class CreateShiftcommentsTable extends Migration {

	/**
	 * Run the migrations.
	 *
	 * @return void
	 */
	public function up()
	{
		Schema::create('shiftcomments', function(Blueprint $table)
		{
			$table->integer('id', true);
			$table->string('message', 200);
			$table->dateTime('time')->default(DB::raw('CURRENT_TIMESTAMP'));
			$table->boolean('carryOn')->default(0);
			$table->date('endOfCarryOn')->nullable();
			$table->integer('user_id')->index('fk_comments_users1_idx');
			$table->integer('shiftsheet_id')->index('fk_comments_shiftSheets1_idx');
			$table->integer('shiftaction_id')->index('fk_comments_shiftActions1_idx');
		});
	}


	/**
	 * Reverse the migrations.
	 *
	 * @return void
	 */
	public function down()
	{
		Schema::drop('shiftcomments');
	}

}
