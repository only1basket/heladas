<?php

namespace App;

use Illuminate\Database\Eloquent\Model;

class Suscripcion_tipo extends Model {

	protected $table = 'suscripcion_tipo';
	public $timestamps = false;

	public function suscripciones()
	{
		return $this->hasMany('App\Suscripcion');
	}

	public function mensajes()
	{
		return $this->hasMany('App\Mensaje');
	}

}