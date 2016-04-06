<?php

use Illuminate\Database\Migrations\Migration;
use Illuminate\Database\Schema\Blueprint;

class CreateMensajeEnviadoTable extends Migration {

	public function up()
	{
		Schema::create('mensaje_enviado', function(Blueprint $table) {
			$table->increments('id');
			$table->integer('id_mensaje')->unsigned();
			$table->integer('id_alertagenerada')->unsigned();
			$table->datetime('creado');
			$table->datetime('modificado');
			$table->string('idsms', 50);
			$table->string('estado', 255);
			$table->integer('intento');
		});
	}

	public function down()
	{
		Schema::drop('mensaje_enviado');
	}
}