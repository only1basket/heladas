<?php

use Illuminate\Database\Migrations\Migration;
use Illuminate\Database\Schema\Blueprint;

class CreateCentroEstudioTable extends Migration {

	public function up()
	{
		Schema::create('centro_estudio', function(Blueprint $table) {
			$table->increments('id');
			$table->string('centro_estudio', 30);
		});
	}

	public function down()
	{
		Schema::drop('centro_estudio');
	}
}