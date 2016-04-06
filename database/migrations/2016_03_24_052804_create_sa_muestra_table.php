<?php

use Illuminate\Database\Migrations\Migration;
use Illuminate\Database\Schema\Blueprint;

class CreateSaMuestraTable extends Migration {

	public function up()
	{
		Schema::create('sa_muestra', function(Blueprint $table) {
			$table->datetime('tiempo')->primary();
			$table->integer('idEmaVariable')->unsigned();
			$table->decimal('valor');
			$table->tinyInteger('valido');
		});
	}

	public function down()
	{
		Schema::drop('sa_muestra');
	}
}
