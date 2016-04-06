<?php

namespace App;

use Illuminate\Database\Eloquent\Model;

class Sa_ema extends Model {

	protected $table = 'sa_ema';
	public $timestamps = false;

	public function comuna()
	{
		return $this->belongsTo('App\Comuna', 'idComuna');
	}

	public function sa_ema_variables()
	{
		return $this->hasMany('App\Sa_ema_variable');
	}

}