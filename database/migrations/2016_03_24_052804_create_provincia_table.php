<?php

use Illuminate\Database\Migrations\Migration;
use Illuminate\Database\Schema\Blueprint;

class CreateProvinciaTable extends Migration {

	public function up()
	{
		Schema::create('provincia', function(Blueprint $table) {
			$table->increments('id');
			$table->integer('id_region')->unsigned();
			$table->string('provincia', 120);
		});
	}

	public function down()
	{
		Schema::drop('provincia');
	}
}