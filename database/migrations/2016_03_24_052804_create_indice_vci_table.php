<?php

use Illuminate\Database\Migrations\Migration;
use Illuminate\Database\Schema\Blueprint;

class CreateIndiceVciTable extends Migration {

	public function up()
	{
		Schema::create('indice_vci', function(Blueprint $table) {
			$table->increments('id');
			$table->string('imagen', 80);
			$table->datetime('fechahora');
		});
	}

	public function down()
	{
		Schema::drop('indice_vci');
	}
}