<?php

namespace App;

use Illuminate\Database\Eloquent\Model;

class Etnia extends Model {

	protected $table = 'etnia';
	public $timestamps = false;

	protected $fillable = ['id','etnia'];

	public function personas()
	{
		return $this->hasMany('App\Persona');
	}

}