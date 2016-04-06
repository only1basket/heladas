<?php

use Illuminate\Database\Migrations\Migration;
use Illuminate\Database\Schema\Blueprint;

class CreateRnEcuacionesTable extends Migration {

	public function up()
	{
		Schema::create('rn_ecuaciones', function(Blueprint $table) {
			$table->increments('id');
			$table->integer('id_alerta')->unsigned();
			$table->integer('id_estacion')->unsigned();
			$table->text('ecuacion');
		});
	}

	public function down()
	{
		Schema::drop('rn_ecuaciones');
	}
}