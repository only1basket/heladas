<?php

use Illuminate\Database\Migrations\Migration;
use Illuminate\Database\Schema\Blueprint;

class CreatePersonaTable extends Migration {

	public function up()
	{
		Schema::create('persona', function(Blueprint $table) {
			$table->increments('id');
			$table->integer('id_comuna')->unsigned();
			$table->integer('id_ocupacion')->unsigned();
			$table->integer('id_etnia')->unsigned();
			$table->integer('id_genero')->unsigned();
			$table->integer('id_rubro')->unsigned();
			$table->integer('id_centro_estudio')->unsigned();
			$table->string('empresa_asesor', 100);
			$table->string('rut', 12);
			$table->string('nombre', 100);
			$table->string('apellido', 100);
			$table->string('telefono', 15);
			$table->string('email', 200);
		});
	}

	public function down()
	{
		Schema::drop('persona');
	}
}