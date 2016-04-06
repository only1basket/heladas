<?php

use Illuminate\Database\Migrations\Migration;
use Illuminate\Database\Schema\Blueprint;

class CreateEtniaTable extends Migration {

	public function up()
	{
		Schema::create('etnia', function(Blueprint $table) {
			$table->increments('id');
			$table->string('etnia', 40);
		});
	}

	public function down()
	{
		Schema::drop('etnia');
	}
}