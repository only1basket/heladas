<?php

namespace App;

use Illuminate\Database\Eloquent\Model;

class Usuario_detalle extends Model {

	protected $table = 'usuario_detalle';
	protected $fillable = ['id_usuario', 'id_persona', 'fechahora'];
	public $timestamps = false;

	public function user()
	{
		return $this->belongsTo('App\User','id_usuario');
	}

	public function persona()
	{
		return $this->belongsTo('App\Persona','id_persona');
	}

}