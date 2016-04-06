<?php

namespace App;

use Illuminate\Database\Eloquent\Model;

class Usuario_tipo extends Model {

	protected $table = 'usuario_tipo';
	public $timestamps = false;

	public function users()
	{
		return $this->hasMany('App\User');
	}

}