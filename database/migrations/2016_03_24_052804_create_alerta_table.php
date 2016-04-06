<?php

use Illuminate\Database\Migrations\Migration;
use Illuminate\Database\Schema\Blueprint;

class CreateAlertaTable extends Migration {

	public function up()
	{
		Schema::create('alerta', function(Blueprint $table) {
			$table->increments('id');
			$table->string('alerta', 100);
			$table->text('descripcion');
		});
	}

	public function down()
	{
		Schema::drop('alerta');
	}
}