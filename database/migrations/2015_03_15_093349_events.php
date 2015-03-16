<?php

use Illuminate\Database\Schema\Blueprint;
use Illuminate\Database\Migrations\Migration;

class Events extends Migration {

	/**
	 * Run the migrations.
	 *
	 * @return void
	 */
	public function up()
	{
		Schema::create('events', function(Blueprint $table)
		{
			$table->increments('id');
            $table->integer('rd_id')->unsigned();
            $table->text('description');
            $table->timestamp('time');
            $table->integer('rate');
            $table->text('location');
            $table->timestamp('closing_date');
			$table->timestamps();
            $table->foreign('rd_id')->references('id')->on('resturant_detail');
		});
	}

	/**
	 * Reverse the migrations.
	 *
	 * @return void
	 */
	public function down()
	{
		Schema::drop('events');
	}

}
