<?php

use Illuminate\Database\Schema\Blueprint;
use Illuminate\Database\Migrations\Migration;

class Reply extends Migration {

	/**
	 * Run the migrations.
	 *
	 * @return void
	 */
	public function up()
	{
		Schema::create('reply', function(Blueprint $table)
		{
			$table->increments('id');
            $table->integer('rw_id')->unsigned();
            $table->integer('review_id');
            $table->text('reply_description');
            $table->integer('status');
            $table->text('slug');
			$table->timestamps();
            $table->foreign('rw_id')->references('id')->on('resturant_review');
		});
	}

	/**
	 * Reverse the migrations.
	 *
	 * @return void
	 */
	public function down()
	{
		Schema::drop('reply');
	}

}
