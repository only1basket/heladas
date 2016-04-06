<?php

namespace App;

use Illuminate\Database\Eloquent\Model;

class Estacion extends Model {

	protected $table = 'estacion';
	public $timestamps = false;

	public function comuna()
	{
		return $this->belongsTo('App\Comuna', 'id_comuna');
	}

	public function rn_ecuaciones()
	{
		return $this->hasMany('App\Rn_ecuaciones');
	}

	public function suscripciones()
	{
		return $this->hasMany('App\Suscripcion');
	}

}