<?php

namespace App;

use Illuminate\Database\Eloquent\Model;

class Sa_ema_variable extends Model {

	protected $table = 'sa_ema_variable';
	public $timestamps = false;

	public function sa_variable()
	{
		return $this->belongsTo('App\Sa_variable', 'idVariable');
	}

	public function sa_ema()
	{
		return $this->belongsTo('App\Sa_ema', 'idEma');
	}

	public function dmc_pronosticos_12()
	{
		return $this->hasMany('App\Dmc_pronostico_12');
	}

	public function sa_muestras()
	{
		return $this->hasMany('App\Sa_muestra');
	}

}