<?php

namespace App;

use Illuminate\Database\Eloquent\Model;

class Sa_unidad extends Model {

	protected $table = 'sa_unidad';
	public $timestamps = false;

	public function sa_variables()
	{
		return $this->hasMany('App\Sa_variable');
	}

}