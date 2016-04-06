<?php

use Illuminate\Database\Migrations\Migration;
use Illuminate\Database\Schema\Blueprint;

class CreateOcupacionTable extends Migration {

	public function up()
	{
		Schema::create('ocupacion', function(Blueprint $table) {
			$table->increments('id');
			$table->string('ocupacion', 30);
		});
	}

	public function down()
	{
		Schema::drop('ocupacion');
	}
}