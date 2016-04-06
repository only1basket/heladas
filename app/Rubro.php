<?php

namespace App;

use Illuminate\Database\Eloquent\Model;

class Rubro extends Model {

	protected $table = 'rubro';
	public $timestamps = false;

	protected $fillable = ['id','rubro'];

	public function personas()
	{
		return $this->hasMany('App\Persona');
	}

}