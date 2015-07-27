<?php

use Illuminate\Database\Schema\Blueprint;
use Illuminate\Database\Migrations\Migration;

class RLocation extends Migration {

	/**
	 * Run the migrations.
	 *
	 * @return void
	 */
	public function up()
	{
		Schema::create('r_location', function(Blueprint $table)
		{
			$table->integer('rd_id')->unsigned();
			$table->integer('loc_id')->unsigned();
            $table->foreign('rd_id')->references('id')->on('restaurant_details')->onUpdate('cascade')->onDelete('cascade');
            $table->foreign('loc_id')->references('id')->on('locations')->onUpdate('cascade')->onDelete('cascade');
		});
	}

	/**
	 * Reverse the migrations.
	 *
	 * @return void
	 */
	public function down()
	{
		Schema::drop('r_location');
	}

}
