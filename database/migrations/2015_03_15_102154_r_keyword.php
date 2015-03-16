<?php

use Illuminate\Database\Schema\Blueprint;
use Illuminate\Database\Migrations\Migration;

class RKeyword extends Migration {

	/**
	 * Run the migrations.
	 *
	 * @return void
	 */
	public function up()
	{
		Schema::create('r_keyword', function(Blueprint $table)
		{
			$table->integer('rd_id')->unsigned();
			$table->integer('skeyword_id')->unsigned();
            $table->foreign('rd_id')->references('id')->on('resturant_detail');
            $table->foreign('skeyword_id')->references('skeyword_id')->on('s_keyword');
		});
	}

	/**
	 * Reverse the migrations.
	 *
	 * @return void
	 */
	public function down()
	{
		Schema::drop('r_keyword');
	}

}
