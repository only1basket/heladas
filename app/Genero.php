<?php

namespace App;

use Illuminate\Database\Eloquent\Model;

class Genero extends Model {

	protected $table = 'genero';
	public $timestamps = false;

	protected $fillable = ['id','genero'];

	public function personas()
	{
		return $this->hasMany('App\Persona');
	}

}