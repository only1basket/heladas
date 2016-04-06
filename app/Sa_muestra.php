<?php

namespace App;

use Illuminate\Database\Eloquent\Model;

class Sa_muestra extends Model {

	protected $table = 'sa_muestra';
	public $timestamps = false;

	public function sa_ema_variable()
	{
		return $this->belongsTo('App\Sa_ema_variable', 'idEmaVariable');
	}

}