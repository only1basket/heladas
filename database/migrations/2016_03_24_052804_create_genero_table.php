<?php

use Illuminate\Database\Migrations\Migration;
use Illuminate\Database\Schema\Blueprint;

class CreateGeneroTable extends Migration {

	public function up()
	{
		Schema::create('genero', function(Blueprint $table) {
			$table->increments('id');
			$table->string('genero', 10);
		});
	}

	public function down()
	{
		Schema::drop('genero');
	}
}