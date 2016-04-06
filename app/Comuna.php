<?php

namespace App;

use Illuminate\Database\Eloquent\Model;

class Comuna extends Model {

	protected $table = 'comuna';
	public $timestamps = false;

	protected $fillable = ['id','comuna','id_provincia'];

	public function provincia()
	{
		return $this->belongsTo('App\Provincia', 'id_provincia');
	}

	public function personas()
	{
		return $this->hasMany('App\Persona');
	}

	public function sa_emas()
	{
		return $this->hasMany('App\Sa_ema');
	}

	public function estaciones()
	{
		return $this->hasMany('App\Estacion');
	}

}