<?php

use Illuminate\Database\Migrations\Migration;
use Illuminate\Database\Schema\Blueprint;

class CreateEstacionTable extends Migration {

	public function up()
	{
		Schema::create('estacion', function(Blueprint $table) {
			$table->increments('id');
			$table->integer('id_comuna')->unsigned();
			$table->string('nombre', 30);
			$table->decimal('latitud');
			$table->decimal('longitud');
			$table->decimal('elevacion');
		});
	}

	public function down()
	{
		Schema::drop('estacion');
	}
}