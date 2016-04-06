<?php

namespace App;

use Illuminate\Database\Eloquent\Model;

class Dmc_pronostico_12 extends Model {

	protected $table = 'dmc_pronostico_12';
	public $timestamps = true;

	public function sa_ema_variable()
	{
		return $this->belongsTo('App\Sa_ema_variable', 'id_EmaVariable');
	}

}