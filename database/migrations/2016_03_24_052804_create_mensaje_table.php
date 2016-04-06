<?php

use Illuminate\Database\Migrations\Migration;
use Illuminate\Database\Schema\Blueprint;

class CreateMensajeTable extends Migration {

	public function up()
	{
		Schema::create('mensaje', function(Blueprint $table) {
			$table->increments('id');
			$table->integer('id_suscripciontipo')->unsigned();
			$table->integer('id_alerta')->unsigned();
			$table->string('nombre', 100);
			$table->text('cuerpo');
		});
	}

	public function down()
	{
		Schema::drop('mensaje');
	}
}