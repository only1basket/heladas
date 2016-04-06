<?php

namespace App;

use Illuminate\Database\Eloquent\Model;

class Region extends Model {

	protected $table = 'region';
	public $timestamps = false;

	public function provincias()
	{
		return $this->hasMany('App\Provincia');
	}

}