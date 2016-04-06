<?php

use Illuminate\Database\Migrations\Migration;
use Illuminate\Database\Schema\Blueprint;

class CreateSaEmaTable extends Migration {

	public function up()
	{
		Schema::create('sa_ema', function(Blueprint $table) {
			$table->increments('id');
			$table->integer('idComuna')->unsigned();
			$table->string('nombre', 30);
			$table->decimal('latitud');
			$table->decimal('longitud');
			$table->decimal('elevacion');
		});
	}

	public function down()
	{
		Schema::drop('sa_ema');
	}
}