<?php

namespace App;

use Illuminate\Database\Eloquent\Model;

class Alerta extends Model {

	protected $table = 'alerta';
	public $timestamps = false;

	public function rn_ecuaciones()
	{
		return $this->hasMany('App\Rn_ecuaciones');
	}

	public function mensajes()
	{
		return $this->hasMany('App\Mensaje');
	}

}