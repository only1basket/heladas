<?php

namespace App;

use Illuminate\Database\Eloquent\Model;

class Mensaje_enviado extends Model {

	protected $table = 'mensaje_enviado';
	public $timestamps = false;

	public function mensaje()
	{
		return $this->belongsTo('App\Mensaje', 'id_mensaje');
	}

	public function alerta_generada()
	{
		return $this->belongsTo('App\Alerta_generada', 'id_alertagenerada');
	}

}