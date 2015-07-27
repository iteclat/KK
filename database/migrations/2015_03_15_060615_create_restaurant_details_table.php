<?php

use Illuminate\Database\Schema\Blueprint;
use Illuminate\Database\Migrations\Migration;

class CreateRestaurantDetailsTable extends Migration {

	/**
	 * Run the migrations.
	 *
	 * @return void
	 */
	public function up()
	{
		Schema::create('restaurant_details', function(Blueprint $table)
		{
            $table->increments('id');
            $table->integer('r_id')->unsigned();
            $table->string('name')->unique();
            $table->string('gps');
            $table->integer('tags_id');
            $table->string('affordability');
            $table->text('menu');
            $table->text('details');
            $table->text('featured_item');
            $table->timestamp('closing_time');
            $table->timestamp('opening_time');
            $table->integer('rating');
            $table->text('facilities');
            $table->integer('advertisement');
            $table->text('offer');
            $table->integer('parent');
            $table->timestamp('establishment_date');
            $table->string('type');
            $table->text('slug');
            $table->integer('status');
            $table->timestamps();
            $table->foreign('r_id')->references('id')->on('restaurant_owners')->onUpdate('cascade')->onDelete('cascade');
		});
	}

	/**
	 * Reverse the migrations.
	 *
	 * @return void
	 */
	public function down()
	{
		Schema::drop('restaurant_details');
	}

}
