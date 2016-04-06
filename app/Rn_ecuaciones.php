<?php

namespace App;

use Illuminate\Database\Eloquent\Model;

class Rn_ecuaciones extends Model {

	protected $table = 'rn_ecuaciones';
	public $timestamps = false;

	public function estacion()
	{
		return $this->belongsTo('App\Estacion', 'id_estacion');
	}

	public function alerta()
	{
		return $this->belongsTo('App\Alerta', 'id_alerta');
	}

	public function alerta_generadas()
	{
		return $this->hasMany('App\Alerta_generada');
	}

}