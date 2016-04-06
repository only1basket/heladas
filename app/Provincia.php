<?php

namespace App;

use Illuminate\Database\Eloquent\Model;

class Provincia extends Model {

	protected $table = 'provincia';
	public $timestamps = false;

	protected $fillable = ['id','provincia','id_region'];

	public function comunas()
	{
		return $this->hasMany('App\Comuna');
	}

	public function region()
	{
		return $this->belongsTo('App\Region', 'id_region');
	}

}