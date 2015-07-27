<?php

use Illuminate\Database\Schema\Blueprint;
use Illuminate\Database\Migrations\Migration;

class CreateRKeywordsTable extends Migration {

	/**
	 * Run the migrations.
	 *
	 * @return void
	 */
	public function up()
	{
		Schema::create('r_keywords', function(Blueprint $table)
		{
            $table->integer('rd_id')->unsigned();
            $table->integer('skeyword_id')->unsigned();
            $table->foreign('rd_id')->references('id')->on('restaurant_details')->onUpdate('cascade')->onDelete('cascade');
            $table->foreign('skeyword_id')->references('skeyword_id')->on('s_keywords')->onUpdate('cascade')->onDelete('cascade');
		});
	}

	/**
	 * Reverse the migrations.
	 *
	 * @return void
	 */
	public function down()
	{
		Schema::drop('r_keywords');
	}

}
