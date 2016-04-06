<?php

use Illuminate\Database\Migrations\Migration;
use Illuminate\Database\Schema\Blueprint;

class CreateSaUnidadTable extends Migration {

	public function up()
	{
		Schema::create('sa_unidad', function(Blueprint $table) {
			$table->increments('id');
			$table->string('nombre', 30);
			$table->string('abreviatura', 10);
		});
	}

	public function down()
	{
		Schema::drop('sa_unidad');
	}
}