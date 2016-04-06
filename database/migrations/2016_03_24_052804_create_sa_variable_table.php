<?php

use Illuminate\Database\Migrations\Migration;
use Illuminate\Database\Schema\Blueprint;

class CreateSaVariableTable extends Migration {

	public function up()
	{
		Schema::create('sa_variable', function(Blueprint $table) {
			$table->increments('id');
			$table->integer('idUnidad')->unsigned();
			$table->string('nombre', 30);
		});
	}

	public function down()
	{
		Schema::drop('sa_variable');
	}
}