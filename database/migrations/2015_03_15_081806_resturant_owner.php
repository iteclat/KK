<?php

use Illuminate\Database\Schema\Blueprint;
use Illuminate\Database\Migrations\Migration;

class ResturantOwner extends Migration {

	/**
	 * Run the migrations.
	 *
	 * @return void
	 */
	public function up()
	{
		Schema::create('resturant_owner', function(Blueprint $table)
		{
			$table->increments('id');
            $table->string('owner_name');
            $table->integer('user_id');
            $table->integer('branch');
            $table->string('password');
            $table->integer('multiple');
			$table->timestamps();
		});
	}

	/**
	 * Reverse the migrations.
	 *
	 * @return void
	 */
	public function down()
	{
		Schema::drop('resturant_owner');
	}

}
