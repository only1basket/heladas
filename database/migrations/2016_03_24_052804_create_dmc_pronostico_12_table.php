<?php

use Illuminate\Database\Migrations\Migration;
use Illuminate\Database\Schema\Blueprint;

class CreateDmcPronostico12Table extends Migration {

	public function up()
	{
		Schema::create('dmc_pronostico_12', function(Blueprint $table) {
			$table->increments('id');
			$table->timestamps();
			$table->integer('id_EmaVariable')->unsigned();
			$table->date('fecha');
			$table->datetime('tiempo');
			$table->decimal('valor');
		});
	}

	public function down()
	{
		Schema::drop('dmc_pronostico_12');
	}
}