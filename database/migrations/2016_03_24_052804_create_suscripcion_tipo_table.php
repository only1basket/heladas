<?php

use Illuminate\Database\Migrations\Migration;
use Illuminate\Database\Schema\Blueprint;

class CreateSuscripcionTipoTable extends Migration {

	public function up()
	{
		Schema::create('suscripcion_tipo', function(Blueprint $table) {
			$table->increments('id');
			$table->string('suscripcion_tipo', 20);
		});
	}

	public function down()
	{
		Schema::drop('suscripcion_tipo');
	}
}