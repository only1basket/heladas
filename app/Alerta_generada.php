<?php

namespace App;

use Illuminate\Database\Eloquent\Model;

class Alerta_generada extends Model {

	protected $table = 'alerta_generada';
	public $timestamps = false;

	public function rn_ecuacion()
	{
		return $this->belongsTo('App\Rn_ecuaciones', 'id_ecuacion');
	}

	public function mensaje_enviados()
	{
		return $this->hasMany('App\Mensaje_enviado');
	}

}