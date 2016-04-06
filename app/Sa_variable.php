<?php

namespace App;

use Illuminate\Database\Eloquent\Model;

class Sa_variable extends Model {

	protected $table = 'sa_variable';
	public $timestamps = false;

	public function sa_unidad()
	{
		return $this->belongsTo('App\Sa_unidad', 'id_Unidad');
	}

	public function sa_ema_variables()
	{
		return $this->hasMany('App\Sa_ema_variable');
	}

}