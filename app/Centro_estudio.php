<?php

namespace App;

use Illuminate\Database\Eloquent\Model;

class Centro_estudio extends Model {

	protected $table = 'centro_estudio';
	public $timestamps = false;

	protected $fillable = ['id','centro_estudio'];

	public function personas()
	{
		return $this->hasMany('App\Persona');
	}

}