<?php

use Illuminate\Database\Migrations\Migration;
use Illuminate\Database\Schema\Blueprint;

class CreateRegionTable extends Migration {

	public function up()
	{
		Schema::create('region', function(Blueprint $table) {
			$table->increments('id');
			$table->string('region', 120);
			$table->tinyInteger('orden');
		});
	}

	public function down()
	{
		Schema::drop('region');
	}
}