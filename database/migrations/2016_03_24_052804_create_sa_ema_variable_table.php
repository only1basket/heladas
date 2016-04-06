<?php

use Illuminate\Database\Migrations\Migration;
use Illuminate\Database\Schema\Blueprint;

class CreateSaEmaVariableTable extends Migration {

	public function up()
	{
		Schema::create('sa_ema_variable', function(Blueprint $table) {
			$table->increments('id');
			$table->integer('idEma')->unsigned();
			$table->integer('idVariable')->unsigned();
		});
	}

	public function down()
	{
		Schema::drop('sa_ema_variable');
	}
}