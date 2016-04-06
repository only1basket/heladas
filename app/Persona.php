<?php

namespace App;

use Illuminate\Database\Eloquent\Model;

class Persona extends Model {

	protected $table = 'persona';
	public $timestamps = false;

	protected $fillable = ['id_comuna','id_ocupacion','id_etnia','id_genero','id_rubro','id_centro_estudio','empresa_asesor','rut','nombre','apellido','telefono','email'];

	public function genero()
	{
		return $this->belongsTo('App\Genero', 'id_genero');
	}

	public function rubro()
	{
		return $this->belongsTo('App\Rubro', 'id_rubro');
	}

	public function centro_estudio()
	{
		return $this->belongsTo('App\Centro_estudio', 'id_centro_estudio');
	}

	public function etnia()
	{
		return $this->belongsTo('App\Etnia', 'id_etnia');
	}

	public function ocupacion()
	{
		return $this->belongsTo('App\Ocupacion', 'id_ocupacion');
	}

	public function comuna()
	{
		return $this->belongsTo('App\Comuna', 'id_comuna');
	}

	public function suscripciones()
	{
		return $this->hasMany('App\Suscripcion');
	}

	public function usuario_detalle()
	{
		return $this->hasOne('App\Usuario_detalle');
	}

}
