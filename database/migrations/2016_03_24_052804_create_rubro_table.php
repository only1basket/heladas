<?php

use Illuminate\Database\Migrations\Migration;
use Illuminate\Database\Schema\Blueprint;

class CreateRubroTable extends Migration {

	public function up()
	{
		Schema::create('rubro', function(Blueprint $table) {
			$table->increments('id');
			$table->string('rubro', 30);
		});
	}

	public function down()
	{
		Schema::drop('rubro');
	}
}