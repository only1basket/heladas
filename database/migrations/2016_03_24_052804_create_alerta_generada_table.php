<?php

use Illuminate\Database\Migrations\Migration;
use Illuminate\Database\Schema\Blueprint;

class CreateAlertaGeneradaTable extends Migration {

	public function up()
	{
		Schema::create('alerta_generada', function(Blueprint $table) {
			$table->increments('id');
			$table->integer('id_ecuacion')->unsigned();
			$table->datetime('creado');
			$table->datetime('modificado');
		});
	}

	public function down()
	{
		Schema::drop('alerta_generada');
	}
}