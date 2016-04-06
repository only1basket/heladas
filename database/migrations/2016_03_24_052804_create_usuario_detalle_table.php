<?php

use Illuminate\Database\Migrations\Migration;
use Illuminate\Database\Schema\Blueprint;

class CreateUsuarioDetalleTable extends Migration {

	public function up()
	{
		Schema::create('usuario_detalle', function(Blueprint $table) {
			$table->increments('id');
			$table->integer('id_usuario')->unsigned();
			$table->integer('id_persona')->unsigned();
			$table->datetime('fechahora');
		});
	}

	public function down()
	{
		Schema::drop('usuario_detalle');
	}
}