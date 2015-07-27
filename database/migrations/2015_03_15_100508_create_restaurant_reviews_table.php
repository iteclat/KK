<?php

use Illuminate\Database\Schema\Blueprint;
use Illuminate\Database\Migrations\Migration;

class CreateRestaurantReviewsTable extends Migration {

	/**
	 * Run the migrations.
	 *
	 * @return void
	 */
	public function up()
	{
		Schema::create('restaurant_reviews', function(Blueprint $table)
		{
           $table->increments('id');
            $table->integer('rd_id')->unsigned();
            $table->integer('u_id');
            $table->text('review_description');
            $table->integer('rating');
            $table->integer('status');
            $table->timestamps();
            $table->foreign('rd_id')->references('id')->on('restaurant_details')->onUpdate('cascade')->onDelete('cascade');
		});
	}

	/**
	 * Reverse the migrations.
	 *
	 * @return void
	 */
	public function down()
	{
		Schema::drop('restaurant_reviews');
	}

}
