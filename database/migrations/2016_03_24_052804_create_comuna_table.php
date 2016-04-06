<?php

use Illuminate\Database\Migrations\Migration;
use Illuminate\Database\Schema\Blueprint;

class CreateComunaTable extends Migration {

	public function up()
	{
		Schema::create('comuna', function(Blueprint $table) {
			$table->increments('id');
			$table->integer('id_provincia')->unsigned();
			$table->string('comuna', 120);
		});
	}

	public function down()
	{
		Schema::drop('comuna');
	}
}