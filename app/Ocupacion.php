<?php

namespace App;

use Illuminate\Database\Eloquent\Model;

class Ocupacion extends Model {

	protected $table = 'ocupacion';
	public $timestamps = false;

	protected $fillable = ['id','ocupacion'];

	public function personas()
	{
		return $this->hasMany('App\Persona');
	}

}