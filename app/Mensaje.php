<?php

namespace App;

use Illuminate\Database\Eloquent\Model;

class Mensaje extends Model {

	protected $table = 'mensaje';
	public $timestamps = false;

	public function suscripcion_tipo()
	{
		return $this->belongsTo('App\Suscripcion_tipo', 'id_suscripciontipo');
	}

	public function alerta()
	{
		return $this->belongsTo('App\Alerta', 'id_alerta');
	}

	public function mensaje_enviados()
	{
		return $this->hasMany('App\Mensaje_enviado');
	}

}