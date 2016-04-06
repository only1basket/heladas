<?php

use Illuminate\Database\Migrations\Migration;
use Illuminate\Database\Schema\Blueprint;

class CreateSuscripcionTable extends Migration {

	public function up()
	{
		Schema::create('suscripcion', function(Blueprint $table) {
			$table->increments('id');
			$table->integer('id_persona')->unsigned();
			$table->integer('id_estacion')->unsigned();
			$table->integer('id_suscripciontipo')->unsigned();
		});
	}

	public function down()
	{
		Schema::drop('suscripcion');
	}
}