<?php

use Illuminate\Database\Schema\Blueprint;
use Illuminate\Database\Migrations\Migration;

class ResturantReview extends Migration {

	/**
	 * Run the migrations.
	 *
	 * @return void
	 */
	public function up()
	{
		Schema::create('resturant_review', function(Blueprint $table)
		{
			$table->increments('id');
            $table->integer('rd_id')->unsigned();
            $table->integer('u_id');
            $table->text('review_description');
            $table->integer('rating');
            $table->integer('status');
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
		Schema::drop('resturant_review');
	}

}
