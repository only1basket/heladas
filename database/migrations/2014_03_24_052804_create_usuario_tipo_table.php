<?php

use Illuminate\Database\Migrations\Migration;
use Illuminate\Database\Schema\Blueprint;

class CreateUsuarioTipoTable extends Migration {

	public function up()
	{
		Schema::create('usuario_tipo', function(Blueprint $table) {
			$table->increments('id');
			$table->string('usuario_tipo', 20);
		});
	}

	public function down()
	{
		Schema::drop('usuario_tipo');
	}
}