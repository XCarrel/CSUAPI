<?php

use Illuminate\Database\Migrations\Migration;
use Illuminate\Database\Schema\Blueprint;

class AddForeignKeysToBatchesTable extends Migration {

	/**
	 * Run the migrations.
	 *
	 * @return void
	 */
	public function up()
	{
		Schema::table('batches', function(Blueprint $table)
		{
			$table->foreign('base_id', 'fk_batches_bases1')->references('id')->on('bases')->onUpdate('RESTRICT')->onDelete('RESTRICT');
			$table->foreign('drug_id', 'fk_batches_drugs')->references('id')->on('drugs')->onUpdate('RESTRICT')->onDelete('RESTRICT');
		});
	}


	/**
	 * Reverse the migrations.
	 *
	 * @return void
	 */
	public function down()
	{
		Schema::table('batches', function(Blueprint $table)
		{
			$table->dropForeign('fk_batches_bases1');
			$table->dropForeign('fk_batches_drugs');
		});
	}

}
