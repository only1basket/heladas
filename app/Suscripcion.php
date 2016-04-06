<?php

namespace App;

use Illuminate\Database\Eloquent\Model;

class Suscripcion extends Model {

	protected $table = 'suscripcion';
	public $timestamps = false;

	public function estacion()
	{
		return $this->belongsTo('App\Estacion', 'id_estacion');
	}

	public function persona()
	{
		return $this->belongsTo('App\Persona', 'id_persona');
	}

	public function suscripcion_tipo()
	{
		return $this->belongsTo('App\Suscripcion_tipo', 'id_suscripciontipo');
	}

}